import { setupSortable }  from './Load/setupSortable';
import { convertToHtml }  from './Convert/convertToHtml';
import { loadSetting }    from './Load/loadSetting';
import { addTaskCommand } from './Editor/editor';
import { UpdateTasks }    from './updateTasks';

/* Todo: updateTasksで統一できるか検討する e.target */
/* check boxが切り替わった時の処理 */
window.updateCheckbox = (index) => {
    const task_list    = document.querySelectorAll('#taskList');
    const task_list_el = task_list[index];
    const project_id   = task_list_el.getAttribute('project_id');
    const task_id      = task_list_el.getAttribute('task_id');

    UpdateTasks(task_list_el, project_id, task_id, index);
}

window.setupSortable = () => setupSortable();

window.convertToHtml = (tasks, index) => convertToHtml(tasks, index);

window.loadSetting   = (event) => loadSetting(event);

// Todo:Editorの処理を書く
window.addTaskCommand = (e) => addTaskCommand(e);