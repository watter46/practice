import { toggleOperateMenu }   from './TaskList/OperateMenu/toggleOperateMenu';
import { closeEditor }         from './Editor/closeEditor';
import { openEditor }          from './Editor/openEditor';
import { convertToHtml }       from './Convert/convertToHtml';


/* operateMenuの開閉の設定 */
toggleOperateMenu();

/* Edit時のエディターの開閉 */
window.openEditor  = (index) => openEditor(index)
window.closeEditor = (index) => closeEditor(index);

/* ロードした時の設定 */
window.convertToHtml = (tasks, index) => convertToHtml(tasks, index);