import { convertToString } from '../Convert/convertToString';

export const openEditor = (index) => {

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