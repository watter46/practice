<div class="p-2">
    {{-- タイマー --}}
    <div class="text-gray-300 w-full flex justify-center">
        <div class="timer-container">
            <div class="timer">
                <div class="timer-box flex justify-center">
                    <label class="timer-font">9 : 41</label>
                </div>
                <div id="timer-btn-box" class="timer-btn-box bg-violet-600 flex justify-center items-center">
                    <svg class="timer-start-btn" viewbox="0 0 16 16">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.25 3l1.166-.624 8 5.333v1.248l-8 5.334-1.166-.624V3zm1.5 1.401v7.864l5.898-3.932L5.75 4.401z"/>
                    </svg>
                </div>
            </div>
            <div class="pointer-box">
                <svg class="svg-curve">
                    <path d="M 0 5 Q 195 50 390 5" />
                </svg>
                <div class="pointer"></div>
            </div>
        </div>
    </div>

    {{-- タスク選択 --}}
    <div class="mt-3 p-2 w-full">
        <label class="flex justify-start items-center">
            <svg width="25" height="25" class="mr-2" fill="white" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 463 463" enable-background="new 0 0 463 463">
                <g>
                    <g>
                        <path d="M71.5,0C32.075,0,0,32.075,0,71.5S32.075,143,71.5,143S143,110.925,143,71.5S110.925,0,71.5,0z M71.5,128    C40.346,128,15,102.654,15,71.5S40.346,15,71.5,15S128,40.346,128,71.5S102.654,128,71.5,128z"/>
                        <path d="M71.5,160C32.075,160,0,192.075,0,231.5S32.075,303,71.5,303s71.5-32.075,71.5-71.5S110.925,160,71.5,160z M71.5,288    C40.346,288,15,262.654,15,231.5S40.346,175,71.5,175s56.5,25.346,56.5,56.5S102.654,288,71.5,288z"/>
                        <path d="M71.5,320C32.075,320,0,352.075,0,391.5S32.075,463,71.5,463s71.5-32.075,71.5-71.5S110.925,320,71.5,320z M71.5,448    C40.346,448,15,422.654,15,391.5S40.346,335,71.5,335s56.5,25.346,56.5,56.5S102.654,448,71.5,448z"/>
                        <path d="m90.196,50.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.464,1.465 3.384,2.197 5.303,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.608,7.10543e-15z"/>
                        <path d="m90.196,210.197l-26.696,26.697-10.696-10.697c-2.93-2.929-7.678-2.929-10.607,0s-2.929,7.678 0,10.606l16,16c1.464,1.465 3.384,2.197 5.303,2.197s3.839-0.732 5.304-2.197l32-32c2.929-2.929 2.929-7.678 0-10.606-2.93-2.929-7.678-2.929-10.608,0z"/>
                        <path d="m175.5,55h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m175.5,103h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m175.5,215h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m455.5,248h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"/>
                        <path d="m175.5,375h144c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-144c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5z"/>
                        <path d="m455.5,408h-280c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h280c4.143,0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"/>
                    </g>
                </g>
            </svg>
            <span class="text-2xl text-gray-300">Choose Tasks</span>
        </label>

        {{-- タスク選択 --}}
        <div class="dark grid grid-cols-2 gap-4">
            <select id="states" class="h-12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 w-full focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose a Task</option>
                <option value="">Task1</option>
                <option value="">Task2</option>
                <option value="">Task3</option>
                <option value="">Task4</option>
            </select>

            <div class="selected-Task rounded-lg h-96 flex justify-center items-center bg-gray-700">
                <div class="">
                    <label class="mb-5 text-xl text-white flex justify-center">Drag Task</label>
                    <svg width="150" height="150" fill="white" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                        <g>
                            <g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M860.8,5018.4c-292.1-77.7-534.7-285-668.9-567.6c-70.7-150.7-75.4-179-82.4-471.1l-9.4-313.3h355.6h355.6v223.8c0,365.1,82.4,459.3,407.5,459.3h181.4v353.3v353.3l-204.9-2.4C1079.8,5053.7,931.4,5037.3,860.8,5018.4z"/><path d="M1988.9,4702.8v-353.3h494.6h494.6v353.3v353.3h-494.6h-494.6V4702.8z"/><path d="M3567,4702.8v-353.3h482.8h482.8v353.3v353.3h-482.8H3567V4702.8z"/><path d="M5121.5,4702.8v-353.3H5317c334.5,0,416.9-89.5,416.9-459.3v-223.8h353.3h353.3v254.4c0,386.3-73,593.5-285,817.3c-207.2,219-464,318-826.7,318h-207.3V4702.8z"/><path d="M104.7,2583.1v-497l348.6,7.1l346.2,7.1l7.1,489.9l4.7,487.5H458H104.7V2583.1z"/><path d="M5733.8,2583.1v-494.6h353.3h353.3v494.6v494.6h-353.3h-353.3V2583.1z"/><path d="M104.7,1016.8V534H458h353.3v482.8v482.8H458H104.7V1016.8z"/><path d="M6635.9,1452.5c-89.5-54.2-148.4-157.8-148.4-261.4c0-42.4,40-146,96.6-247.3c77.7-143.7,89.5-181.3,68.3-221.4c-35.3-65.9-127.2-61.2-181.4,9.4c-23.6,33-108.3,174.3-190.8,315.6c-164.9,285-223.8,334.5-391,334.5c-89.5,0-122.5-14.1-193.2-77.7c-73-66-87.1-96.6-96.6-195.5c-9.4-103.6,2.3-134.2,108.3-325c66-115.4,120.1-223.8,120.1-240.2c0-68.3-30.6-103.6-94.2-103.6c-61.3,0-82.4,25.9-226.1,273.2c-87.1,148.4-181.3,287.3-207.2,306.2c-134.3,87.1-322.7,58.9-426.3-63.6c-44.7-56.5-58.9-98.9-58.9-186.1c0-94.2,23.5-153.1,150.7-376.8c157.8-277.9,169.6-341.5,68.3-367.4c-73-18.9-94.2,2.4-235.5,235.5C4662.2,486.8,4593.9,541,4452.6,541c-214.3,0-367.4-212-292.1-405.1c18.8-47.1,167.2-315.6,332.1-598.2c164.9-282.6,299.1-518.2,299.1-525.2c0-4.7-141.3,89.5-310.9,212c-405.1,282.6-447.5,303.8-579.4,289.7c-120.1-14.1-204.9-68.3-282.6-183.7c-44.8-63.6-54.2-103.6-47.1-197.9c4.7-63.6,28.3-146,51.8-181.4c35.3-54.2,2035-1479.1,2298.8-1636.9c221.4-134.3,579.4-160.2,805.5-61.2c226.1,101.3,1161.2,659.5,1253,749c54.2,51.8,124.8,148.4,155.4,212c51.8,103.6,58.9,148.4,58.9,388.6l-2.3,270.9l-155.5,464c-219,645.3-374.5,989.2-708.9,1571c-207.3,362.7-306.2,515.8-358,548.8C6878.5,1511.4,6730.1,1511.4,6635.9,1452.5z M7041-285.7c9.4-23.6,94.2-273.2,190.8-558.2c169.6-506.4,174.3-518.2,129.5-560.5c-96.6-96.6-124.8-49.5-318,508.7c-98.9,287.3-179,546.4-179,574.7C6864.4-226.8,7005.7-198.5,7041-285.7z M6388.6-624.9c84.8-106,548.8-949.2,541.7-989.2c-9.4-58.9-70.7-101.3-117.8-82.4c-42.4,14.1-584.1,946.8-584.1,1003.4C6228.5-610.7,6336.8-563.6,6388.6-624.9z M6117.8-1404.4c202.6-230.8,369.8-438.1,369.8-461.7c0-51.8-44.8-96.6-98.9-96.6c-56.5,0-796.1,840.8-796.1,906.8c0,68.3,21.2,87.1,94.2,77.7C5733.8-982.9,5839.8-1088.9,6117.8-1404.4z"/><path d="M7707.6,1424.2c25.9-42.4,117.8-202.5,204.9-353.3L8070.3,793h471.1h471.1l91.8-91.9l91.9-91.9v-2251.7c0-2487.2,9.4-2345.9-148.4-2440.1c-73-44.8-134.3-47.1-2312.9-47.1s-2239.9,2.3-2312.9,47.1c-146,89.5-148.4,101.3-148.4,1008v822l-341.5,237.9c-186.1,131.9-346.2,240.3-353.3,240.3s-11.8-489.9-11.8-1088.2c0-1158.8,4.7-1210.6,117.8-1429.6c70.7-143.7,259.1-334.4,395.7-409.8c252-136.6,186.1-134.2,2666.2-134.2c1848.9,0,2296.4,7.1,2393,33c292.1,77.7,541.7,289.7,676,572.3l75.4,160.2l7.1,2355.3c4.7,2301.1,4.7,2357.6-42.4,2510.7c-89.5,296.8-336.8,548.8-640.6,657.1c-124.8,42.4-195.5,47.1-845.5,47.1h-709L7707.6,1424.2z"/><path d="M104.7-240.9c0-353.3,150.7-657.1,416.9-850.3c186.1-131.9,381.5-188.4,657.1-188.4h221.4v353.3V-573h-202.6H995l-91.9,91.9c-89.5,89.5-91.9,94.2-91.9,259.1v167.2H458H104.7V-240.9z"/><path d="M2005.4-589.5c-9.4-7.1-16.5-167.2-16.5-353.3v-336.8h494.6h494.6v353.3V-573H2500C2236.2-573,2012.5-580.1,2005.4-589.5z"/>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <style>
        .timer-container {
            position: relative;
            height: 175px;
        }
        .timer-box {
            width: 390px;
            height: 120px;
            position: absolute;
        }
        .timer-font {
            font-size: 90px;
        }

        .timer:hover .timer-btn-box {
            width: 500px;
            height: 175px;
            opacity: 0.9;
            border-radius: 50%;
            background-color: #1A2E4F;
            left: -15%;
        }
        
        .timer-btn-box {
            width: 390px;
            height: 120px;
            position: absolute;
            opacity: 0;
        }
        .timer-start-btn {
            width: 80px;
            height: 80px;
            fill: greenyellow;
        }

        .pointer-box {
            width: 390px;
            height: 55px;
            position: relative;
            top: 65%;
        }
        .svg-curve {
            width: 390px;
            height: 55px;
            stroke: azure;
            stroke-width: 3px;
            fill: none;
        }
        .pointer {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: greenyellow;
            position: absolute;
            top: -10%;
            animation-name: animation-timer;
            animation-duration:300s;/*--時間を指定する--*/
            animation-iteration-count: infinite;
        }
        @keyframes animation-timer {
            from {
                transform: rotate(12deg) translateX(-10px) rotate(0deg);
            }
            to {
                transform: rotate(0deg) translateX(380px) rotate(180deg);
            }
        }
    </style>
    
    {{-- <script>
        function timer(){
        var setTime = 15;
        var second = 0;
        const circle = document.querySelector(".circle");
        const seconds = document.querySelector(".second");
     
        circle.classList.add('pie');
        //先ほどのアニメーションを書き換えてください
        circle.style.animation =  'pie '+ setTime*2 +'s linear';
            var timerId = setInterval(function() {
                second += 1;
                if(second >= setTime){
                    clearInterval(timerId);
                }
                countTime = setTime - second;
                seconds.textContent= (countTime % 60);
                if(countTime < 10){  //10秒切ったら文字が赤くなります
                    document.querySelector(".seconds").style.color = 'green';
                };
            }, 1000);
        }
        timer();
    </script> --}}
</div>