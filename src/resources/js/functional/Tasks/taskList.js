const editTask = (index) => {
    console.log("edit")
    console.log(index)
}

const deleteTask = (index) => {
    console.log("delete")
    console.log(index)
}

window.editTask   = (index) => editTask(index);
window.deleteTask = (index) => deleteTask(index);


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