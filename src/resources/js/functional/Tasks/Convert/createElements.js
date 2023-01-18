const ul_element = () => {
    const ul = document.createElement('ul');
    ul.id = "sortable";

    return ul;
}

const li_element = () => {
    const li = document.createElement('li');

    return li;
}

const handle_element = () => {
    const handle = document.createElement('span');
    handle.classList.add('py-2', 'px-3', 'cursor-pointer', 'opacity-0', 'hover:opacity-100', 'handle');
    handle.textContent = ':::';

    return handle;
}

const checkbox_element = (text, index) => {
    const checkbox = document.createElement('input');
    checkbox.type="checkbox";
    checkbox.classList.add('mr-2');
    checkbox.setAttribute('onchange', `updateCheckbox(${index})`);

    if (text.startsWith('- [|] ')) {
        checkbox.setAttribute('checked', 'checked');
    }

    return checkbox;
}

const task_text_element = (text) => {
    const div = document.createElement('div');
    div.classList.add("w-11/12");
    const p = document.createElement('p');

    const excepted_command = text.replace(/^....../g, "");

    p.textContent = excepted_command;
    p.classList.add("break-words");

    div.appendChild(p);

    return div;
}

const newline_element = () => {
    const newline = document.createElement('br');

    return newline;
}

const li_task_element = (text, index) => {

    const task_wrapper  = document.createElement('div');
    task_wrapper.classList.add('flex', 'items-center');

    const li       = li_element();
    const handle   = handle_element();
    const checkbox = checkbox_element(text, index);
    const text_p   = task_text_element(text);

    li.appendChild(handle)
    li.appendChild(checkbox)
    li.appendChild(text_p)

    task_wrapper.appendChild(handle);
    task_wrapper.appendChild(checkbox);
    task_wrapper.appendChild(text_p);

    li.appendChild(task_wrapper);
    
    return li;
}

const comment_element = (text) => {
    const p = document.createElement('p');
    p.innerText = text;
    p.classList.add("break-words");

    return p;
}

const li_comment_element = (text) => {
    const comment_wrapper = document.createElement('div');
    comment_wrapper.classList.add('ml-14');

    const comment_p = comment_element(text);

    comment_wrapper.appendChild(comment_p);

    return comment_wrapper;
}



const appendTaskInUl = (text, index, ul_nodes, last_index) => {
    const li = li_task_element(text, index);

    const target_ul = ul_nodes[last_index];

    target_ul.appendChild(li);
}

const appendTaskInTaskList = (text, index, taskList_element) => {
    const ul = ul_element();
    const li = li_task_element(text, index);

    ul.appendChild(li);
    taskList_element.appendChild(ul);
}

const appendCommentInLi = (text, li_nodes, last_li_index) => {
    const comment = li_comment_element(text);

    const target_li = li_nodes[last_li_index];

    target_li.appendChild(comment);
}

const appendCommentInTaskList = (text, taskList_element) => {
    const p = comment_element(text);

    taskList_element.appendChild(p);
}

const appendNewlineInTaskList = (index, taskList_element) => {
    const newline = newline_element();

    taskList_element.appendChild(newline);
}

export { appendTaskInUl, appendTaskInTaskList, appendCommentInLi, appendCommentInTaskList, appendNewlineInTaskList }