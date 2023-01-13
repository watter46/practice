<div class="operate mt-4 border-2 rounded-lg border-gray-600">
    {{-- task bar --}}
    <div class="py-0.5 pr-3 rounded-t-lg w-full flex justify-end bg-gray-800">
        <p id="js_operate_task{{ $index }}" class="text-white cursor-pointer"
           index="{{ $index }}">・・・</p>
    </div>

    <div id="js_operate_menu" class="hidden">
        <div class="hover:bg-cyan-500"
             onclick="openEditor({{ $index }})">
            <div class="px-3 py-1.5 text-gray-300 font-medium cursor-pointer">
                Edit
            </div>
        </div>

        <div class="my-2 border-b-2 border-gray-400"></div>

        <div class="hover:bg-cyan-500">
            <p class="px-3 py-1.5 text-gray-300 font-medium cursor-pointer"
               wire:click="$emit('deleteTask',{{ $project_id }}, {{ $task_id }}, {{ $index }})">
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
                            task_id="{{ $task_id }}"
                            index="{{ $index }}">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- タスク編集の時に表示するエディター --}}
    <div id="js_editor" class="w-full hidden">
        <livewire:task.editor :project_id="$project_id"
                              :task_id="$task_id"
                              :index="$index"
                              :method="'update'" />
    </div>
    
    <script>
        /* ロード時に受け取ったデータから、HTMLエレメントに変換する */
        document.addEventListener('livewire:load', () => {
            const tasks = @this.task;
            const index = @this.index;
            
            convertToHtml(tasks, index);
        });

        /* ページ全体を読み込みが完了した時にsortablejsを設定する */
        /* livewire:loadでsetupSortableを設定すると反映されない箇所があるのでonloadで対応した */
        document.body.onload = () => setupSortable();
    </script>
</div>