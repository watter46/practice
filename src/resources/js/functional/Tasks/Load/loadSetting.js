import { setupSortable } from './setupSortable';
import { closeEditor }   from '../Editor/closeEditor';
import { convertToHtml } from '../Convert/convertToHtml';


export const loadSetting = (event) => {
    const index   = event.detail.index;

    const task_list_el = document.querySelectorAll('#taskList')[index];

    /* 編集前の子ノードを削除 */
    while (task_list_el.firstChild){
        task_list_el.removeChild(task_list_el.firstChild);
    }

    closeEditor(index);

    const tasks = event.detail.project['tasks'][index]['task'];

    convertToHtml(tasks, index)
    setupSortable();
}