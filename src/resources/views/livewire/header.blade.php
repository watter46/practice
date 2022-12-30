<div class="py-4 px-8 bg-sky-900">
    <div class="flex justify-end items-center">
        {{-- アバター --}}
        <div id="js_hamburger">
            <div class="avatar">
                <label for="avatar">
                    <div class="flex justify-center items-center">
                        <svg width="20px" height="20px" class="mr-1" id="Layer_1" data-name="Layer 1" viewBox="0 0 122.88 122.88">
                            <path d="M61.44,0A61.46,61.46,0,1,1,18,18,61.21,61.21,0,0,1,61.44,0ZM49.28,71.35c.26-2.18-6.23-10.54-7.41-14.54-2.54-4-3.44-10.46-.68-14.73,1.11-1.69.63-3.16.63-5.51,0-23.24,40.7-23.24,40.7,0,0,2.94-.67,3.63.92,6,2.66,3.86,1.29,10.72-1,14.3C81,61,74.24,69,74.71,71.37c.42,11.92-25.5,11.53-25.43,0v0Zm-31,20.07c3.25-3.6,9.09-3.76,16.17-7.36a74.7,74.7,0,0,0,7.75-4.53c8.22,10.08,15,21.16,12.78,34.05a52.65,52.65,0,0,0,6.44.4c.55,0,1.09,0,1.64,0-.5-15.14,8.38-26.21,17.79-35.63A68.55,68.55,0,0,0,96.33,86c4.62,1.54,7.39,2.53,9,4.3a52.54,52.54,0,1,0-87,1.08Z">
                            </path>
                        </svg>
                        <svg width="8px" height="6px" style="fill: white;" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 345.51">
                            <path fill-rule="nonzero" d="m3.95 30.57 236.79 307.24c1.02 1.39 2.24 2.65 3.67 3.75 8.27 6.39 20.17 4.87 26.56-3.41l236.11-306.4C510.14 28.38 512 23.91 512 19c0-10.49-8.51-19-19-19H18.93v.06A18.9 18.9 0 0 0 7.36 4.01C-.92 10.4-2.44 22.3 3.95 30.57z">
                            </path>
                        </svg>
                    </div>
                </label>
            </div>
        </div>

        <div id="detail_menu" class="hidden">
            <p class="text-gray-300 font-medium cursor-pointer"
                wire:click="toProfile">
                Profile
            </p>
        </div>
    </div>
</div>