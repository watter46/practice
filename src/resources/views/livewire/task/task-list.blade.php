<div class="operate mt-4 border-2 rounded-lg border-gray-600" :wire:key="{{ $tasks['id'] }}">
    {{-- task bar --}}
    <div class="py-0.5 pr-3 rounded-t-lg w-full flex justify-end bg-gray-800">
        <p id="js_operate_task{{ $index }}" class="text-white cursor-pointer"
           index="{{ $index }}">・・・</p>
    </div>

    <div id="js_operate_menu" class="hidden">
        <div class="hover:bg-cyan-500"
             onclick="editTask({{ $index }})">
            <div class="px-3 py-1.5 text-gray-300 font-medium cursor-pointer">
                Edit
            </div>
        </div>

        <div class="my-2 border-b-2 border-gray-400"></div>

        <div class="hover:bg-cyan-500">
            <p class="px-3 py-1.5 text-gray-300 font-medium cursor-pointer"
               onclick="deleteTask({{ $index }})">
                Delete
            </p>
        </div>
    </div>

    {{-- tasks --}}
    <div class="p-3 border-b-2 border-gray-600">
        <div id="tasks">
            <table class="table-auto text-white">
                <tbody>
                    <tr>
                        <td id="taskList"
                            project_id="{{ $project_id }}"
                            task_id="{{ $tasks['id'] }}">
                            @foreach ($tasks['task'] as $task)
                            @foreach ($task as $tag => $content)
                                @if($tag === 'ul')
                                    <ul id="sortable">
                                        @foreach ($content as $texts)
                                        @foreach ($texts as $sub_tag => $li_texts)
                                            @if ($sub_tag === "li" && count($li_texts) === 1)
                                                <li class="flex items-center">
                                                    <span class="py-2 px-3 cursor-pointer opacity-0 hover:opacity-100 handle">
                                                        :::
                                                    </span>
                                                    
                                                    @if (str_starts_with($li_texts['input'], '- [ ]'))
                                                        <input type="checkbox"
                                                               class="mr-2"
                                                               onchange="updateTasks(event, {{ $index }})">
                                                        <p>
                                                            {{ ltrim($li_texts['input'], '- [ ] ') }}
                                                        </p>
                                                    @endif
                                                    
                                                    @if (str_starts_with($li_texts['input'], '- [|]'))
                                                        <input type="checkbox"
                                                               class="mr-2"
                                                               checked
                                                               onchange="updateTasks(event, {{ $index }})">
                                                        <p>
                                                            {{ ltrim($li_texts['input'], '- [|] ') }}
                                                        </p>
                                                    @endif
                                                </li>
                                            @endif

                                            @if ($sub_tag === "li" && count($li_texts) !== 1)
                                                <li>
                                                    <div class="flex items-center">
                                                        <span class="py-2 px-3 cursor-pointer opacity-0 hover:opacity-100 handle">
                                                            :::
                                                        </span>
                                                        
                                                        @if (str_starts_with($li_texts['input'], '- [ ]'))
                                                            <input type="checkbox"
                                                                   class="mr-2"
                                                                   onchange="updateTasks(event, {{ $index }})">
                                                            <p>
                                                                {{ ltrim($li_texts['input'], '- [ ] ') }}
                                                            </p>
                                                        @endif
                                                        
                                                        @if (str_starts_with($li_texts['input'], '- [|]'))
                                                            <input type="checkbox"
                                                                   class="mr-2"
                                                                   checked
                                                                   onchange="updateTasks(event, {{ $index }})">
                                                            <p>
                                                                {{ ltrim($li_texts['input'], '- [|] ') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="ml-14">
                                                        <p>
                                                            {!! nl2br(e($li_texts['p'])) !!}</p>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                        @endforeach
                                    </ul>
                                @endif

                                @if($tag === "p")
                                    <p>{!! nl2br(e($content)) !!}</p>
                                @endif

                                @if($tag === "br")
                                    <br>
                                @endif
                            @endforeach
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>