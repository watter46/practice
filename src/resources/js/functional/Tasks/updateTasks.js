export const UpdateTasks = (task_list_el, project_id, task_id) => {
    
    /* NodeからElementノードのみ抽出　Textノード(nodeType = 3)の排除 */
    const filtered_texts = [...task_list_el.childNodes].filter(node => node.nodeType !== 3)

    /* CHECKBOXのコマンドの文字列をテキストに追加する */
    const modified_texts = filtered_texts.map(element => {
        if (element.tagName === "UL")
        {
            const li_els = element.getElementsByTagName('li');

            return [...li_els].map(li_el => {
                const is_checked = li_el.getElementsByTagName('input')[0].checked;
                const text       = li_el.getElementsByTagName('p')[0].innerText;

                if (is_checked)
                {
                    return "- [|] " + text;
                }

                if (!is_checked)
                {
                    return "- [ ] " + text;
                }
            });
        }

        if (element.tagName === "P")
        {
            return element.innerText;
        }

        if (element.tagName === "BR")
        {
            return element.innerText;
        }
    });

    const modified_task = modified_texts.flat().join().replace(/,/g, '\n');

    Livewire.emit('updateTask', modified_task, project_id, task_id);
}