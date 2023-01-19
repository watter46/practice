import { prependCheckbox } from './prependCheckbox';

export const editorForAddition = () => {
    const editor_addition = document.getElementById('editor_textarea_add');

    editor_addition.addEventListener('keydown', (e) => keydownCommand(e), false);
}

export const editorForUpdate = () => {
    const editor_updates = document.querySelectorAll('#editor_textarea_update');

    [...editor_updates].forEach(editor => {
        editor.addEventListener('keydown', (e) => keydownCommand(e), false);
    });
}

const keydownCommand = (e) => {
    if (e.ctrlKey && e.key === "[")     keydownPrependCheckbox(e);
    if (e.ctrlKey && e.key === 'Enter') keydownStoreTask(e);
}

const keydownPrependCheckbox = (e) => {
    const textarea_element = e.target;

    prependCheckbox(textarea_element);
}

const keydownStoreTask = (e) => {
    const id = e.target.getAttribute('id');

    if (id === "editor_textarea_add")    storeTask(e);
    if (id === "editor_textarea_update") updateTask(e);
}

const storeTask  = (e) => {
    const project_id = e.target.getAttribute('project_id');
    const task       = e.target.value;
    Livewire.emit('jsStoreTask', project_id, task);
}

const updateTask = (e) => {
    const project_id = e.target.getAttribute('project_id');
    const task_id    = e.target.getAttribute('task_id');
    const task       = e.target.value;
    const index      = e.target.getAttribute('index');
    Livewire.emit('updateTask',  task, project_id, task_id, index);
}