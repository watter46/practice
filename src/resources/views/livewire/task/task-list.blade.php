<div class="operate mt-4 border-2 rounded-lg border-gray-600" :wire:key="{{ $task_id }}">
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
                            task_id="{{ $task_id }}">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Edit時にタスクの代わりに表示するテキストエリア --}}

    <livewire:task.update-task :project_id="$project_id"
                               :task_id="$task_id"
                               :index="$index"
                               :wire:key="$task_id" />

    
    <script>
        /* ページロード完了時にsortablejsを設定する */
        document.addEventListener('livewire:load', () => {
            const tasks = @this.task;
            const index = @this.index;
            
            // console.log(tasks)
            // console.log(index)
            convertToHtml(tasks, index);
            setupSortable();
        });
    </script>
</div>