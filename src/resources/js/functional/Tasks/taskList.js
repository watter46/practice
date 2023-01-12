import { toggleOperateMenu } from './TaskList/OperateMenu/toggleOperateMenu';
import { closeEditor }       from './Editor/closeEditor';
import { openEditor }        from './Editor/openEditor';


/* operateMenuの開閉の設定 */
toggleOperateMenu();

/* Edit時のエディターの開閉 */
window.openEditor  = (index) => openEditor(index)
window.closeEditor = (index) => closeEditor(index);