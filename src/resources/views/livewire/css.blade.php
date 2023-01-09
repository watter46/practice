<div class="p-3">
    <div id="task" class="flex justify-center mt-3">
        <p class="text-white text-4xl">- [ ] テキスト
            gagaga
        </p>
    </div>

    <div id="textarea" class="flex justify-center mt-3 hidden">
        <textarea class="text-4xl" wire:model="task"></textarea>
    </div>

    <div class="flex justify-center mt-3">
        <button type="button" class="ml-3 bg-white text-4xl" onclick="edit()">btn</button>
    </div>
    
    <script>
        const edit = () => {
            const edit = document.getElementById('task');
            
            const text = edit.innerText;

            const textarea_el = document.getElementsByTagName('textarea')[0];
            
            textarea_el.innerText = text;

            const textarea = document.getElementById('textarea');
            textarea_el.focus();
            textarea.classList.remove('hidden');
            edit.classList.add('hidden');
        }
    </script>
</div>