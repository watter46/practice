<div class="px-12 pt-6">
    <label class="text-3xl text-gray-300">Projects</label>

    {{-- new task & search --}}
    <div class="py-2 px-4">
        <div class="flex justify-end items-center"
             wire:click="toNewProject">
            <button type="button"
                    class="py-2 px-4 border border-none rounded-xl bg-lime-600 text-white font-bold hover:bg-lime-500">
                    New Project
            </button>
        </div>
    </div>

    @if ($projects)
        <form name="form" class="mt-4 border-2 rounded-lg border-gray-600 bg-gray-700">
            {{-- toolbar header --}}
            <div class="p-3 flex items-center border-b-2 border-gray-600 bg-gray-800">
                <input type="checkbox"
                       id="header-checkbox"
                       class="mr-4 border border-gray-300"
                       onchange="is_all_checked()">
                <label id="form-checked-count" class="w-full text-gray-400"></label>

                <div class="px-2 flex justify-end items-center">
                    <div class="hover-tool flex justify-center items-center">
                        <label class="text-lg text-gray-400">Labels</label>
                        <svg class="w-5 h-5 pt-1 fill-gray-400" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>

                <div class="px-2 flex justify-end items-center">
                    <div class="hover-tool flex justify-center items-center">
                        <label class="text-lg text-gray-400">sort</label>
                        <svg class="w-5 h-5 pt-1 fill-gray-400" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
            </div>

            @foreach ($projects as $project)
                <div class="hover-project p-3 border-b-2 border-gray-600 hover:bg-gray-800">
                    <input type="checkbox"
                           name="project"
                           class="mr-4 border border-gray-300"
                           onchange="rewriting()">
                    <label class="hover-project w-full text-gray-400"
                        wire:click="projectDetail({{ $project['id'] }})">{{ $project['project'] }}
                    </label>
                </div>
            @endforeach
        </form>
    @endif

    <style>
        .hover-tool:hover label {
            cursor: pointer;
            color: rgb(229 231 235);
        }
        .hover-tool:hover svg {
            fill: rgb(229 231 235);
        }
        .hover-project:hover label {
            padding: 0 5px;
            border-bottom: 2px solid rgb(75 85 99);
        }
    </style>

    <script>
        const node_projects      = document.form.project;
        const form_checked_count = document.getElementById('form-checked-count');

        const checked_count    = () => [...node_projects].filter(node => node.checked === true).length;
        const rewriting        = () => form_checked_count.innerText = checked_count() + " select";
        const is_all_checked   = () => {
            const is_checked = document.getElementById('header-checkbox').checked;

            if (is_checked)  [...node_projects].forEach(node => node.checked = true);
            if (!is_checked) [...node_projects].forEach(node => node.checked = false);
            rewriting();
        };
        rewriting();
    </script>
</div>
