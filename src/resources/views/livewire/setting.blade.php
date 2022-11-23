<div class="p-2">
    {{-- Task設定 --}}
    <div class="mb-4 p-3 border-2 rounded-lg border-gray-300">
        <label class="text-2xl text-white underline underline-offset-8">Task</label>
    </div>

    {{-- Timer設定 --}}
    <div class="mb-4 p-3 border-2 rounded-lg border-gray-300">
        <label class="text-2xl text-white underline underline-offset-8">Timer</label>

        <div class="my-3 m-auto w-2/6 h-24">
            <div class="">
                <label for="work duration" class="form-label text-lg text-gray-300 font-bold">Work duration</label>
            </div>
            
            <div class="flex items-center justify-center w-full p-3">
                <div class="py-1 relative min-w-full">
                    <input type="range" class="w-full h-2 bg-gray-200 rounded-full cursor-pointer border border-gray-300">
                    {{-- Todo: ポインタを選択した時に値を表示する --}}
                    {{-- <div class="relative -mt-2 w-1">
                        <div class="bg-black -mt-8 text-white truncate text-xs rounded py-1 px-4">92</div>
                        <svg class="absolute text-black w-full h-2 left-0 top-100" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div> --}}
                    <div class="absolute text-gray-300 -ml-1 bottom-0 left-0 -mb-6">0</div>
                    <div class="absolute text-gray-300 -mr-1 bottom-0 right-0 -mb-6">60</div>
                </div>
            </div>
        </div>

        <div class="my-3 m-auto w-2/6 h-24">
            <div class="">
                <label for="work duration" class="form-label text-lg text-gray-300 font-bold">
                    Short break duration
                </label>
            </div>

            <div class="flex items-center justify-center w-full p-3">
                <div class="py-1 relative min-w-full">
                    <input type="range" class="w-full h-2 bg-gray-200 rounded-full cursor-pointer border border-gray-300">
                    {{-- Todo: ポインタを選択した時に値を表示する --}}
                    {{-- <div class="relative -mt-2 w-1">
                        <div class="bg-black -mt-8 text-white truncate text-xs rounded py-1 px-4">92</div>
                        <svg class="absolute text-black w-full h-2 left-0 top-100" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div> --}}
                    <div class="absolute text-gray-300 -ml-1 bottom-0 left-0 -mb-6">0</div>
                    <div class="absolute text-gray-300 -mr-1 bottom-0 right-0 -mb-6">60</div>
                </div>
            </div>
        </div>

        <div class="my-3 m-auto w-2/6 h-24">
            <div class="">
                <label for="work duration" class="form-label text-lg text-gray-300 font-bold">
                    Long break duration
                </label>
            </div>

            <div class="flex items-center justify-center w-full p-3">
                <div class="py-1 relative min-w-full">
                    <input type="range" class="w-full h-2 bg-gray-200 rounded-full cursor-pointer border border-gray-300">
                    {{-- Todo: ポインタを選択した時に値を表示する --}}
                    {{-- <div class="relative -mt-2 w-1">
                        <div class="bg-black -mt-8 text-white truncate text-xs rounded py-1 px-4">92</div>
                        <svg class="absolute text-black w-full h-2 left-0 top-100" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div> --}}
                    <div class="absolute text-gray-300 -ml-1 bottom-0 left-0 -mb-6">0</div>
                    <div class="absolute text-gray-300 -mr-1 bottom-0 right-0 -mb-6">60</div>
                </div>
            </div>
        </div>

        <div class="my-3 m-auto w-2/6 h-24">
            <div class="">
                <label for="work duration" class="form-label text-lg text-gray-300 font-bold">
                    Rounds
                </label>
            </div>

            <div class="flex items-center justify-center w-full p-3">
                <div class="py-1 relative min-w-full">
                    <input type="range" class="w-full h-2 bg-gray-200 rounded-full cursor-pointer border border-gray-300">
                    {{-- Todo: ポインタを選択した時に値を表示する --}}
                    {{-- <div class="relative -mt-2 w-1">
                        <div class="bg-black -mt-8 text-white truncate text-xs rounded py-1 px-4">92</div>
                        <svg class="absolute text-black w-full h-2 left-0 top-100" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div> --}}
                    <div class="absolute text-gray-300 -ml-1 bottom-0 left-0 -mb-6">0</div>
                    <div class="absolute text-gray-300 -mr-1 bottom-0 right-0 -mb-6">60</div>
                </div>
            </div>
        </div>

        <div class="my-3 m-auto w-2/6 h-24">
            <div class="">
                <label for="work duration" class="form-label text-lg text-gray-300 font-bold">
                    AutoStart
                </label>
            </div>

            <div class="flex items-center justify-center w-full p-3">
                <div class="py-1 relative min-w-full">
                    <input type="range" class="w-full h-2 bg-gray-200 rounded-full cursor-pointer border border-gray-300">
                    {{-- Todo: ポインタを選択した時に値を表示する --}}
                    {{-- <div class="relative -mt-2 w-1">
                        <div class="bg-black -mt-8 text-white truncate text-xs rounded py-1 px-4">92</div>
                        <svg class="absolute text-black w-full h-2 left-0 top-100" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve">
                            <polygon class="fill-current" points="0,0 127.5,127.5 255,0"></polygon>
                        </svg>
                    </div> --}}
                    <div class="absolute text-gray-300 -ml-1 bottom-0 left-0 -mb-6">0</div>
                    <div class="absolute text-gray-300 -mr-1 bottom-0 right-0 -mb-6">60</div>
                </div>
            </div>
        </div>
    </div>
</div>