<?php
declare(strict_types=1);

namespace App\UseCases;


final class TasksUseCase {
    public function convertToTag($tasks)
    {
        $texts = [];

        foreach($tasks as $index => $text)
        {
            $is_command = $this->isCommand($text);
            $is_empty   = $this->isEmpty($text);

            $is_prev_command = $this->isPrevCommand($tasks, $index);
            $is_prev_empty   = $this->isPrevEmpty($tasks, $index);
            $is_prev_strText = $this->isPrevStrText($tasks, $index);

            $li_last_index = fn($texts) => $this->liLastIndex($texts);
            $p_last_index  = fn($texts) => $this->pLastIndex($texts);

            
            if ($is_command)
            {
                if ($is_prev_command)
                {
                    array_push($texts, ['li' => ['input' => $text]]);
                    continue;
                }
                
                array_push($texts, ['li' => ['input' => $text]]);
                continue;
            }

            if ($is_empty)
            {
                array_push($texts, ['br' => $text]);
                continue;
            }

            if ($is_prev_command)
            {
                $li_last_index = $li_last_index($texts);
                
                $texts[$li_last_index]['li']['p'] = $text;
                continue;
            }

            if ($is_prev_empty)
            {
                array_push($texts, ['p' => $text]);
                continue;
            }
           
            if ($is_prev_strText)
            {
                // 最後のコマンドのindexから現在のindexまで、改行がなければ、ul > pタグに挿入する
                $br_exist = $this->brExist($tasks, $index);

                var_dump($index);
                echo '<br>';
                var_dump($tasks);
                echo '<br>';
                echo '<br>';
                
                $p_last_index = $p_last_index($texts);

                if (!$br_exist)
                {
                    if (!$p_last_index)
                    {
                        $li_last_index = $li_last_index($texts);

                        $p_text = $texts[$li_last_index]['li']['p'];

                        $texts[$li_last_index]['li']['p'] = $p_text . "\n" . $text;
                        continue;
                    }
                }

                $p_text = $texts[$p_last_index]['p'];
                $texts[$p_last_index]['p'] = $p_text . "\n" . $text;
                continue;
            };
        };

        return $this->WrapUl($texts);
    }

    private function isCommand($text)
    {
        return str_starts_with($text, "- [ ] ") || str_starts_with($text,"- [|] ");
    }

    private function isEmpty($text)
    {
        return $text === "";
    }

    private function prevText($tasks, $index)
    {
        if ($index - 1 < 0) return false;

        return $tasks[$index - 1];
    }

    private function isPrevCommand($tasks, $index)
    {
        $prev_text = $this->prevText($tasks, $index);

        if (!$prev_text) return false;

        return str_starts_with($prev_text, "- [ ] ") || str_starts_with($prev_text, "- [|] ");
    }

    private function isPrevEmpty($tasks, $index)
    {
        $prev_text = $this->prevText($tasks, $index);

        return empty($prev_text);
    }

    private function isPrevStrText($tasks, $index)
    {
        $prev_text = $this->prevText($tasks, $index);

        if (!$prev_text) return false;

        return !$this->isPrevCommand($tasks, $index);
    }

    private function liLastIndex($texts)
    {
        $lis = array_filter($texts, fn($li) => key($li) === 'li');
        
        $li_keys = array_keys($lis);

        return end($li_keys);
    }

    private function pLastIndex($texts)
    {
        $ps = array_filter($texts, fn($text) => key($text) === 'p');

        if (!$ps) return false;

        $p_keys = array_keys($ps);

        return end($p_keys);
    }

    private function brExist($tasks, $current_index)
    {
        // var_dump($current_index);
        // var_dump($tasks);
        

        $before_tasks  = array_slice($tasks, 0, $current_index);
        // echo '<br>';
        // var_dump($before_tasks);

        $commands      = array_filter($before_tasks, fn($text) => $this->isCommand($text));
        $commands_keys = array_keys($commands);
        $last_li_index = end($commands_keys);

        // echo '<br>';
        // var_dump($commands);
        // echo '<br>';
        // var_dump($commands_keys);
        // echo '<br>';
        // var_dump($last_li_index);

        $search_tasks  = array_slice($before_tasks, $last_li_index, $current_index);

        // echo '<br>';
        // var_dump($search_tasks);

        foreach($search_tasks as $text)
        {
            // var_dump($search_tasks);
            // echo '<br>';
            $is_empty = $this->isEmpty($text);
            
            // echo '<br>';
            // var_dump($is_empty);

            if ($is_empty)
            {
                return true;
            }

            return false;
        }
        // dd($tasks);
    }

    private function WrapUl($texts)
    {
        $wrapped = [];

        foreach($texts as $index => $text)
        {
            $liExist = fn($text) => array_keys($text)[0] === 'li';
            $is_li   = $liExist($text);

            if ($is_li)
            {
                $prev_index = $index - 1;
                
                if ($prev_index < 0)
                {
                    array_push($wrapped, ['ul' => [$text]]);
                    continue;
                };

                $prev_text    = $texts[$prev_index];
                $is_before_li = $liExist($prev_text);

                if ($is_before_li)
                {
                    array_push($wrapped[0]['ul'], $text);
                    continue;
                }

                array_push($wrapped, ['ul' => [$text]]);
                continue;
            }

            array_push($wrapped, $text);
        }

        return $wrapped;
    }
}