<div class="p-3">
    <div class="flex justify-center mt-3">
        <div id="list2" class="text-white">
            <table>
                <tr>
                    <td id="taskList">
                        <p class="text-white">タスク1</p>
                        <p class="text-white">タスク2</p>
                        <p class="text-white">タスク3</p>
                    </td>
                </tr>
            </table>
        </div>
        <button type="button" class="ml-3 bg-white" onclick="change2()">btn</button>
    </div>
    

    <script>
        // replaceWith()試す
        const change2 = () => {
            const el = document.getElementById('taskList');
            const ul = el.querySelelctorAll('#sortable');
            // const childUl = el.lastChild;
            // console.log(childUl)
            console.log(ul)
        }
    </script>
</div>