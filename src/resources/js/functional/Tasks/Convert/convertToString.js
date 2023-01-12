export const convertToString = (task_list_el) => {
/* NodeからElementノードのみ抽出　Textノード(nodeType = 3)の排除 */
const filtered = [...task_list_el.childNodes].filter(node => node.nodeType !== 3)

const converted_list = filtered.map(element => {
    if (element.tagName === "UL") return getInnerTexts(element);
    if (element.tagName === "P")  return getInnerTexts(element);
    if (element.tagName === "BR") return getInnerTexts(element);
});

/* カンマ区切りの配列を改行に変換して文字列で連結する */
const converted_str = converted_list.join().replace(/,/g, '\n');

    return converted_str;
}

const getInnerTexts = (element) => {
    const li_list = element.getElementsByTagName('li');

    if (li_list.length === 0) return element.innerText;

    const innerTexts = [...li_list].map(li => {
        const is_checked = li.getElementsByTagName('input')[0].checked;
        const p_list     = li.getElementsByTagName('p');

        const texts    = [...p_list].map(p => p.innerText);
        const task     = texts[0];
        const comments = texts.slice(1, texts.length);

        const appendToCommand = () => {
            if (is_checked)
            {
                return "- [|] " + task;
            }

            if (!is_checked)
            {
                return "- [ ] " + task;
            }
        }

        const canReturnComments = () => {
            if (comments.length === 0) return;

            return comments;
        }

        /* タスク内のコメントがない場合のundefinedを除去 */
        return [appendToCommand(), canReturnComments()].flat().filter(v => v);
    });

    return innerTexts;
}