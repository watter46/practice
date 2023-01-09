import { convertToString } from './Convert/convertToString';
import { UpdateTasks } from './updateTasks';

const editTask = (index) => {

    /* Element要素からタスクを抽出して文字列に変換する */
    const task_list_el = document.querySelectorAll('#taskList')[index];

    const str_task = convertToString(task_list_el);


    /* 編集するタスクとテキストエディタを差し替える */
    const tasks_el = document.querySelectorAll('#tasks')[index];
    const editor   = document.querySelectorAll('#js_editor')[index];

    tasks_el.classList.add('hidden');
    editor.classList.remove('hidden');


    /* 変換した文字列をテキストエディタの初期値にする */
    const textarea = document.querySelectorAll('#editor_textarea')[index];

    textarea.value = str_task;


    /* タスクの末尾にキャレットをフォーカスする */
    const length = str_task.length;
    
    textarea.focus();
    textarea.setSelectionRange(length, length);
}

const deleteTask = (index) => {
    console.log("delete")
    console.log(index)
}

// const closeEditor = (evt, index) => {
//     const task_list    = document.querySelectorAll('#taskList');
//     const task_list_el = task_list[index];
//     const project_id   = task_list_el.getAttribute('project_id');
//     const task_id      = task_list_el.getAttribute('task_id');

//     UpdateTasks(task_list_el, project_id, task_id);

//     const tasks_el = document.querySelectorAll('#tasks')[index];
//     const editor   = document.querySelectorAll('#js_editor')[index];

//     tasks_el.classList.remove('hidden');
//     editor.classList.add('hidden');

//     // livewire.$emit()
// }

// window.closeEditor = (evt, index) => closeEditor(evt, index);
window.editTask    = (index) => editTask(index);
window.deleteTask  = (index) => deleteTask(index);


/* タスク操作の設定 */
const body = document.body;

const toggleOperateTask = () => {
    document.addEventListener("click", (e) => {

        const removeOperateClass = () => {
            const targets = document.querySelectorAll('#js_operate_menu');

            [...targets].forEach(target => {
                target.classList.add("hidden");
                target.classList.remove("operate-menu");
            });
        }

        const index = e.target.getAttribute('index');

        const el_id = "js_operate_task" + index;
       
        const has_el_id = (e.target.id === el_id);

        // operate_menuをクリックしたか
        if (has_el_id)
        {
            removeOperateClass();

            const target = document.querySelectorAll('#js_operate_menu')[index];
            target.classList.add("operate-menu");
            target.classList.remove("hidden");
        }
        else
        {
            removeOperateClass();
        }
    });
}

toggleOperateTask();