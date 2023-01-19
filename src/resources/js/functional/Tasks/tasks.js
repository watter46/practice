import { setupSortable }  from './Load/setupSortable';
import { loadSetting }    from './Load/loadSetting';
import { updateCheckbox } from './updateTasks';
import { resizeTextareaForAddition } from './Editor/resizeTextarea';
import { resetTextarea }  from './Editor/resetTextarea';


/* Todo: updateTasksで統一できるか検討する e.target */
/* check boxが切り替わった時の処理 */
window.updateCheckbox = (index) => updateCheckbox(index);

/* ロードした時の設定 */
window.setupSortable = ()      => setupSortable();
window.loadSetting   = (event) => loadSetting(event);

/* タスク追加用エディターの高さを設定する */
window.resizeTextareaForAddition = () => resizeTextareaForAddition();

/* タスクを追加した後テキストエリアを空にする */
window.resetTextarea = () => resetTextarea();