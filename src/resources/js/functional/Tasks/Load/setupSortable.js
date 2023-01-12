import Sortable from 'sortablejs';
import { UpdateTasks } from '../updateTasks';

export const setupSortable = () => {
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