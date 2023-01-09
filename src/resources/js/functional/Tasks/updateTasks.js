import { convertToString } from './Convert/convertToString';

export const UpdateTasks = (task_list_el, project_id, task_id, index) => {
    
    const converted_task = convertToString(task_list_el);

    Livewire.emit('updateTask', converted_task, project_id, task_id, index);
}