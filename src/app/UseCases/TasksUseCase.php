<?php
declare(strict_types=1);

namespace App\UseCases;

final class TasksUseCase {

    // ul p brに分ける
    public function convertToTag($tasks)
    {
        $texts = [];

        foreach($tasks as $index => $text)
        {
            // Todo checkがtrueのコマンドの時も判定するように修正
            $is_command    = (str_starts_with($text, "- [ ] ") || str_starts_with($text,"- [|] "));
            $is_empty      = ($text === "");

            $isPrevCommand = function () use ($tasks, $index)
            {
                if ($index - 1 < 0) return false;
                $prev_text = $tasks[$index - 1];

                return str_starts_with($prev_text, "- [ ] ") || str_starts_with($prev_text, "- [|] ");
            };

            if ($is_command)
            {
                if ($isPrevCommand())
                {
                    $ulLastIndex = function () use ($texts)
                    {
                        $uls = array_filter($texts, fn($text) => key($text) === 'ul');

                        $ul_keys = array_keys($uls);

                        return end($ul_keys);
                    };

                    array_push($texts[$ulLastIndex()]['ul'],$text);
                    continue;
                }
                
                array_push($texts, ['ul' => [$text]]);
                continue;
            }

            if ($is_empty)
            {
                array_push($texts, ['br' => $text]);
                continue;
            }

            // TODO: 前がコマンドなら挿入する
            array_push($texts, ['p' => $text]);
            continue;
        };
        
        return $texts;
    }
}