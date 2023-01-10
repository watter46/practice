import { appendTaskInUl,
         appendTaskInTaskList,
         appendCommentInLi,
         appendCommentInTaskList,
         appendNewlineInTaskList } from './createElements'

export const convertToHtml = (tasks, index) => {
    console.log(index)
    // console.log(tasks)

    const task = tasks.split(/\r\n|\n/);

    task.forEach((text, current_index) => {
        const is_command = isCommand(text);
        const is_empty   = isEmpty(text);
        const is_comment = !isCommand(text) && !isEmpty(text);

        const prev_text = prevText(task, current_index);


        const is_prevCommand = isPrevCommand(task, current_index);
        const is_prevEmpty   = isPrevEmpty(task, current_index);
        const is_prevText    = isPrevText(task, current_index);

        if (is_command){
            appendTask(task, index, text, current_index);
            return;
        }

        if (is_empty)
        {
            appendNewline(index);
            return;
        }

        if (is_comment)
        {
            appendComment(task, index, text, current_index);
            return;
        }
    })
}


const isCommand = (text) => {
    return text.startsWith('- [ ] ') || text.startsWith('- [|] ');
}

const isEmpty = (text) => {
    return text === "";
}

const newlineExist = (task, current_index) => {
    const before_texts = task.slice(0, current_index);

    return before_texts.some(text => text === "");
}

const appendTask = (task, index, text, current_index) => {
    const taskList_element = document.querySelectorAll('#taskList')[index];

    const can_append_to_ul = canAppendToUl(task, index, current_index);
    
    if (can_append_to_ul)
    {
        const ul_nodes   = taskList_element.getElementsByTagName('ul');
        const last_index = ul_nodes.length - 1;

        appendTaskInUl(text, index, ul_nodes, last_index);
        return;
    }

    appendTaskInTaskList(text, index, taskList_element);
}

const canAppendToUl = (task, index, current_index) => {
    const ul_exist      = ulExist(task, index);
    const newline_exist = newlineExist(task, current_index);

    return ul_exist && !newline_exist;
}

const ulExist = (task, index) => {
    const taskList_element = document.querySelectorAll('#taskList')[index];

    const ul_nodes = taskList_element.getElementsByTagName('ul');

    return ul_nodes.length !== 0;
}

const appendComment = (task, index, text, current_index) => {
    const taskList_element = document.querySelectorAll('#taskList')[index];

    const can_append_to_ul = canAppendToUl(task, index, current_index)

    if (can_append_to_ul)
    {
        const ul_nodes   = taskList_element.getElementsByTagName('ul');
        const last_index = ul_nodes.length - 1;

        const target_ul = ul_nodes[last_index];
        const li_nodes = target_ul.getElementsByTagName('li');

        const last_li_index = li_nodes.length - 1;

        appendCommentInLi(text, li_nodes, last_li_index);
        return;
    }

    appendCommentInTaskList(text, taskList_element);
}

const appendNewline = (index) => {
    const taskList_element = document.querySelectorAll('#taskList')[index];

    appendNewlineInTaskList(index, taskList_element);
}


const prevText = (task, current_index) => {
    const prev_index = current_index - 1;
    if (prev_index < 0) return false;

    return task[prev_index];
}

const isPrevCommand = (task, current_index) => {
    const prev_text = prevText(task, current_index);

    if (!prev_text) return false;

    return prev_text.startsWith('- [ ] ') || prev_text.startsWith('- [|] ');
}

const isPrevEmpty = (task, current_index) => {
    const prev_text = prevText(task, current_index);

    return prev_text === "";
}

const isPrevText = (task, current_index) => {
    const prev_text = prevText(task, current_index);

    if (!prev_text) return false;

    return !isPrevCommand(task, current_index) && !isEmpty(task, current_index);
}