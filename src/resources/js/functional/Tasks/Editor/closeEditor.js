export const closeEditor = (index) => {
    const task_list    = document.querySelectorAll('#taskList');
    const task_list_el = task_list[index];

    const tasks_el = document.querySelectorAll('#tasks')[index];
    const editor   = document.querySelectorAll('#js_editor')[index];

    tasks_el.classList.remove('hidden');
    editor.classList.add('hidden');
}