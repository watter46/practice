export const prependCheckbox = (textarea_element) => {

    const textarea = textarea_element.value;

    const caret_position = textarea_element.selectionStart;

    textarea_element.value = prependCheckboxToTextarea(textarea, caret_position);

    moveCaret(textarea_element, textarea, caret_position);
}

const hasCheckbox = (line) => {
    return line.startsWith('- [ ] ') || line.startsWith('- [|] '); 
}

/* 
* チェックボックスがfocused_lineにあれば、次の行にチェックボックスを追加する
* チェックボックスがなければ、focused_lineの先頭にチェックボックスを追加する
*/
const prependCheckboxToTextarea = (textarea, caret_position) => {
    const [focused_line, focused_index, split_texts] = getFocusedLine(textarea, caret_position);

    const prependedTexts = (split_texts) => split_texts.join().replace(/,/g, '\n');
    
    if (hasCheckbox(focused_line))
    {
        const prepend_index = focused_index + 1;

        split_texts.splice(prepend_index, 0, '- [ ] ');

        return prependedTexts(split_texts);
    }
    else
    {
        split_texts[focused_index] = '- [ ] ' + focused_line;

        return prependedTexts(split_texts);
    }
}

const getFocusedLine = (textarea, caret_position) => {
    const getFocusedLineIndex = (textarea, caret_position) => {
        const line_number = textarea.substr(0, caret_position).split(/\r\n|\n/).length;
        
        return line_number - 1;
    }

    const split_texts   = textarea.split(/\r\n|\n/);
    const focused_index = getFocusedLineIndex(textarea, caret_position);
    const focused_line  = split_texts[focused_index];

    return [focused_line, focused_index, split_texts];
}

/* 
 * フォーカスが当たっている行にチェックボックスがあれば、チェックボックの後にキャレットを移動
 * フォーカスが当たっている行にチェックボックスがなければ、行末にキャレットを移動
 */
const moveCaret = (textarea_element, textarea, caret_position) => {
    const [focused_line, focused_index, split_texts] = getFocusedLine(textarea, caret_position);

    const getFocusPosition = (focused_line, focused_index, split_texts) => {
        const length_addition = hasCheckbox(focused_line) ? 7 : 6;

        const sliced = split_texts.slice(0, focused_index + 1);
        const joined = sliced.join().replace(/,/g, '\n');

        focus_position = joined.length + length_addition;
    }

    let focus_position;

    getFocusPosition(focused_line, focused_index, split_texts);
    
    textarea_element.setSelectionRange(focus_position, focus_position);
}