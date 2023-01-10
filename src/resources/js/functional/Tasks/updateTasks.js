import { convertToString } from './Convert/convertToString';

export const UpdateTasks = (task_list_el, project_id, task_id, index) => {
    
    const converted = convertToString(task_list_el);

    console.log(converted)
    Livewire.emit('updateTask', converted, project_id, task_id, index);
}