import { clickPrependCheckbox }   from './clickCommand';
import { editorForAddition, editorForUpdate }         from './keydownCommand';

/* エディターclickコマンドの設定 */
window.clickPrependCheckbox = (e) => clickPrependCheckbox(e);

/* エディターkeydownコマンドの設定 */
editorForAddition();
editorForUpdate();