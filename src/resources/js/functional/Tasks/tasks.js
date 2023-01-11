import Sortable from 'sortablejs';
import { UpdateTasks } from './updateTasks';
import { addTaskCommand } from './editor';
import { convertToHtml } from './Convert/convertToHtml';

/* Todo: updateTasksで統一できるか検討する e.target */
/* check boxが切り替わった時の処理 */
window.updateTasks = (index) => {
    const task_list    = document.querySelectorAll('#taskList');
    const task_list_el = task_list[index];
    const project_id   = task_list_el.getAttribute('project_id');
    const task_id      = task_list_el.getAttribute('task_id');

    UpdateTasks(task_list_el, project_id, task_id, index);
}

const closeEditor = (index) => {
    console.log("close")
    const tasks_el = document.querySelectorAll('#tasks')[index];
    const editor   = document.querySelectorAll('#js_editor')[index];

    tasks_el.classList.remove('hidden');
    editor.classList.add('hidden');
}

window.editTasks = (evt, project_id, task_id, index) => {
    const el = evt.target.closest("#test_textarea");
    const textarea = el.querySelectorAll("#editor_textarea")[0].value;

    // console.log(textarea)
    // console.log("edit")
    Livewire.emitTo('task.tasks', 'updateTask', textarea, project_id, task_id, index);
}

/* タスクの並び替えをしたときの処理　sortablejsの設定 */
const setupSortable = () => {
    const sortable_el = document.querySelectorAll('#sortable');
    
    sortable_el.forEach(element => {
        Sortable.create(element, {
            handle: '.handle',
            animation: 300,
            onUpdate: function (evt) {
                const task_list_el = evt.target.parentElement;
                const project_id   = task_list_el.getAttribute('project_id');
                const task_id      = task_list_el.getAttribute('task_id');
                const index        = task_list_el.getAttribute('index');

                UpdateTasks(task_list_el, project_id, task_id, index);
            }
        });
    });
}

window.setupSortable = () => setupSortable();

window.convertToHtml = (tasks, index) => convertToHtml(tasks, index);

window.addTaskCommand = (e) => addTaskCommand(e);

const loadSetting = (event) => {
    console.log("2次load")
    const index   = event.detail.index;

    // closeEditor(index);

    const task_list_el = document.querySelectorAll('#taskList')[index];

    /* 編集前の子ノードを削除 */
    while (task_list_el.firstChild){
        task_list_el.removeChild(task_list_el.firstChild);
    }

    const tasks_el = document.querySelectorAll('#tasks')[index];
    const editor   = document.querySelectorAll('#js_editor')[index];

    tasks_el.classList.remove('hidden');
    editor.classList.add('hidden');

    const tasks = event.detail.project['tasks'][index]['task'];

    convertToHtml(tasks, index)
    setupSortable();
}

window.loadSetting = (event) => loadSetting(event);
