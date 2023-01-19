import { convertToString } from './Convert/convertToString';

export const UpdateTasks = (task_list_el, project_id, task_id, index) => {
    
    const converted = convertToString(task_list_el);

    Livewire.emit('updateTask', converted, project_id, task_id, index);
}

export const updateCheckbox = (index) => {
    const task_list    = document.querySelectorAll('#taskList');
    const task_list_el = task_list[index];
    const project_id   = task_list_el.getAttribute('project_id');
    const task_id      = task_list_el.getAttribute('task_id');

    UpdateTasks(task_list_el, project_id, task_id, index);
}