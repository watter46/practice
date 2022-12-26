import Sortable from 'sortablejs';
import { UpdateTasks } from './updateTasks';
import { addTask } from './editor';

/* check boxが切り替わった時の処理 */
window.updateTasks = (evt, index) => {
    const task_list    = document.querySelectorAll('#taskList');
    const task_list_el = task_list[index];
    const project_id   = task_list_el.getAttribute('project_id');
    const task_id      = task_list_el.getAttribute('task_id');

    UpdateTasks(task_list_el, project_id, task_id);
}


/* タスクの並び替えをしたときの処理　sortablejsの設定 */
const setupSortable = () => {
    const sortable_el = document.querySelectorAll('#sortable');

    sortable_el.forEach((element, index) => {
        Sortable.create(element, {
            handle: '.handle',
            animation: 300,
            onUpdate: function(evt) {
                const task_list_el = evt.target.parentElement;
                const project_id   = task_list_el.getAttribute('project_id');
                const task_id      = task_list_el.getAttribute('task_id');

                UpdateTasks(task_list_el, project_id, task_id);
            }
        });
    })
}

/* ページロード完了時にsortablejsを設定する */
document.addEventListener('livewire:load', () => setupSortable());

/* Taskを追加した時にsortablejsを設定する */
/* livewireはDOMの更新がされた時、blade内のjavascriptが実行されないのでsortablejsの再設定をする */
window.addEventListener('inputTest', () => setupSortable());

window.addTask = () => addTask();

