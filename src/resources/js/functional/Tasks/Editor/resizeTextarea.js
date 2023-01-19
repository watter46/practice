/* タスク追加用のエディターの設定 */
export const resizeTextareaForAddition = () => {
    const editor_addition_el = document.getElementById("editor_textarea_add");

    editor_addition_el.setAttribute("style", `height: ${editor_addition_el.scrollHeight}px;`);
    editor_addition_el.addEventListener("input", (e) => setTextareaHeight(e));
}

/* タスクアップデート用のエディターの設定 */
export const resizeTextareaForUpdate = () => {
    const editor_update_els = document.querySelectorAll("#editor_textarea_update");

    editor_update_els.forEach((textareaEl) => {
        textareaEl.setAttribute("style", `height: ${textareaEl.scrollHeight}px;`);
        textareaEl.addEventListener("input", (e) => setTextareaHeight(e));
    });
}

const setTextareaHeight = (e) => {
    e.target.setAttribute("style", `height: auto`);
    e.target.setAttribute("style", `height: ${e.target.scrollHeight}px;`);
}
