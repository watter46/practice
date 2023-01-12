/* タスク操作の設定 */
// Todo: 分割する
export const toggleOperateMenu = () => {
    document.addEventListener("click", (e) => {

        const addJsOperateMenu = () => {
            const operate_menu_class = document.querySelectorAll('#js_operate_menu')[index].classList;
            operate_menu_class.add("operate-menu");
            operate_menu_class.remove("hidden");
        }
        
        const removeJsOperateMenu = () => {
            const targets = document.querySelectorAll('#js_operate_menu');

            [...targets].forEach(target => {
                target.classList.add("hidden");
                target.classList.remove("operate-menu");
            });
        }

        const index = e.target.getAttribute('index');

        const el_id = "js_operate_task" + index;
       
        const is_click = (e.target.id === el_id);

        const bodyToggleJsOpenOperate = () => {
            const body_class = document.body.classList;

            const has_js_open_operate = body_class.contains("js_open_operate");

            if (has_js_open_operate)
            {
                body_class.remove("js_open_operate");
            }
            else
            {
                body_class.add("js_open_operate")
            }
        }

        const bodyRemoveJsOpenOperate = () => {
            const body_class = document.body.classList;

            body_class.remove("js_open_operate");
        }

        const hasJsOpenOperate = () => {
            const body_class = document.body.classList;

            return body_class.contains("js_open_operate");
        }

        if (is_click)
        {
            bodyToggleJsOpenOperate();
            
            const has_js_open_operate = hasJsOpenOperate();

            if  (has_js_open_operate) addJsOperateMenu();
            if (!has_js_open_operate) removeJsOperateMenu();
        }
        else
        {
            bodyRemoveJsOpenOperate();
            removeJsOperateMenu();
        }
    });
}