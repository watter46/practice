<form class="w-full" wire:submit.prevent="addTask({{ $project_id }})">
    {{-- Editor Command --}}
    <div class="w-full rounded-t-lg border border-gray-600 dark:bg-gray-700">
        <div class="flex justify-end items-center px-3 border-b dark:border-gray-600">
            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600">
                <div class="flex flex-wrap items-center space-x-1 sm:pl-4">
                    {{-- <button type="button"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                            onclick="todo.addBulleted()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span class="sr-only">Add bulletList</span>
                    </button> --}}
                    <button type="button"
                            class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600"
                            onclick="addTask()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <span class="sr-only">Add list</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Textarea --}}
    <div class="py-2 px-4 rounded-b-lg dark:bg-gray-800">
        <label for="editor" class="sr-only">Publish post</label>
        <textarea id="editor_textarea" wire:model.defer="task" project_id="{{ $project_id }}" rows="8" class="block px-0 w-full text-sm text-gray-800 bg-white focus:outline-none border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write an article..." required=""></textarea>
    </div>
    
    {{-- Post Button --}}
    <div class="mt-2 flex justify-end">
        <button type="submit"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-lime-600 rounded-lg focus:ring-4 dark:focus:ring-lime-500 hover:bg-lime-500">
            Publish post
        </button>
    </div>
</form>