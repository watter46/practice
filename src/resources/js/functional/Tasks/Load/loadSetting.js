import { setupSortable }   from './setupSortable';
import { convertToHtml }   from '../Convert/convertToHtml';
import { editorForUpdate } from '../Editor/keydownCommand';

export const loadSetting = (event) => {
    const tasks = event.detail.tasks;

    const taskList_els = document.querySelectorAll('#taskList');

    [...taskList_els].forEach(taskList => {
        while (taskList.firstChild) {
            taskList.removeChild(taskList.firstChild);
        }
    });

    tasks.forEach((task, index) => {
        convertToHtml(task['task'], index)
    });

    setupSortable();
    editorForUpdate();
}