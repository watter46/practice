import { prependCheckbox } from './prependCheckbox';

export const clickPrependCheckbox = (e) => {

    const project_id = e.target.getAttribute('project_id');
    const index      = e.target.getAttribute('index');
    const method     = e.target.getAttribute('method');
    
    const is_method_add    = (method === 'add');
    const is_method_update = (method === 'update');

    if (is_method_add)
    {
        const textarea_element = document.getElementById('editor_textarea_add');

        prependCheckbox(textarea_element);
    }

    if (is_method_update)
    {
        const textarea_element = document.querySelectorAll('#editor_textarea_update')[index];

        prependCheckbox(textarea_element);
    }
}