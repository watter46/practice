<div class="flex justify-center items-center h-screen bg-emerald-300">
    {{-- <div class="box">
        <svg width="390" height="55" stroke="black" stroke-width="3" fill="none">
            <path d="M 0 20 Q 195 50 390 20" />
        </svg>
        <div class="pointer"></div>
    </div> --}}
    <div class="box"></div>
    <div class="box2"></div>
    <div class="box3"></div>

    <style>
        .box {
            width: 390px;
            height: 55px;
            background-color: greenyellow;
            position: relative;
        }
        .box2 {
            width: 390px;
            height: 55px;
            background-color: green;
            position: absolute;
        }
        .box3 {
            width: 390px;
            height: 55px;
            background-color: cyan;
            /* position: absolute; */
        }
        .pointer {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: red;
            position: absolute;
            top: 15%;
            animation-name: animation-timer; /*--アニメーション名--*/
            animation-duration:3s;/*--時間--*/
            animation-iteration-count: infinite;
        }
        @keyframes animation-timer {
            from {
                transform: rotate(10deg) translateX(-10px) rotate(0deg);
            }
            to {
                transform: rotate(0deg) translateX(380px) rotate(180deg);
            }
        }
    </style>
</div>