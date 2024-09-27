<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: ' . $_SERVER['PHP_SELF']); // بازگشت به صفحه
            exit;
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدرسه من | سامانه مدرسه هوشمند</title>
    <style>
        @font-face {
            font-family: 'vazir';
            src: url('Vazir-Medium.ttf');
        }


        body {
            font-family: 'vazir';
            margin: 0;
            background-color: #EDF0FF;
        }

        .header {
            background-color: #EDF0FF;
            padding: 10px;
            position: fixed;
            width: calc(100% - 20px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #c9c9c9;
        }

        .drawer {
            position: fixed;
            top: 0;
            right: -400px; /* مخفی شدن درو */
            width: 260px;
            height: calc(100% - 40px);
            background-color: #EDF0FF;
            box-shadow: rgba(0, 0, 0, 0.1) 0 0 20px;
            transition: right 0.3s ease;
            z-index: 1001;
            padding: 20px;
            border-radius: 15px 0 0 15px;
        }

        .drawer.show {
            right: 0; /* نمایش درو */
            transition-duration: 500ms;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #0005;
            display: none; /* مخفی شدن */
            z-index: 1000;
        }

        .overlay.show {
            display: block; /* نمایش پس‌زمینه */
        }

        .svg-toggle {
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
        }

        .svg-toggle:hover {
            background-color: rgba(166, 169, 179, 0.863);
            transition-duration: 700ms;
        }


        .item {
            border-radius: 38px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: right;
            width: calc(100% - 10px);
            font-size: 1rem;
            margin-bottom: 10px;
            color: #1C274C;
        }

        
        .item svg path {
            fill: #1C274C !important; 
        }

        .item:hover {
            background-color: rgba(166, 169, 179, 0.863);
            transition-duration: 700ms;
        }


        .active {
            background-color: #C4D8FF !important;
        }

        .active svg path {
            fill: #448AFF !important; 
            stroke: #448AFF !important; 
        }


    </style>
</head>
<body>
    <div class="header">
        <img src="https://blogix.ir/assets/svg/icon.svg" class="mdc-top-app-bar-image ml-2" style="height: 40px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 20 20" fill="none" class="svg-toggle">
            <path fill="#000" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"/>
          <script xmlns=""/></svg>
    </div>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Drawer Menu -->
    <div class="drawer">
    <div class="item active">
            میزکار
            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 -0.5 25 25" fill="none" style="margin-left: 8px;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <script xmlns=""/></svg>
    </div>
    <div class="item">
        نمایه من
        <svg fill="none" style="width: 30px; height: 30px; margin-left: 8px;" viewBox="0 0 24 24"><path fill="currentColor" d="M5.256 20h12.698c-.337-1.8-1.023-3.21-1.945-4.19-1.086-1.16-2.566-1.81-4.404-1.81s-3.317.65-4.404 1.81c-.922.98-1.608 2.39-1.945 4.19Zm.486-5.56C7.232 12.85 9.253 12 11.605 12c2.352 0 4.373.85 5.863 2.44 1.477 1.58 2.366 3.8 2.632 6.46l.11 1.1H3l.11-1.1c.266-2.66 1.155-4.88 2.632-6.46ZM11.605 5c-1.105 0-2 .9-2 2s.895 2 2 2 2-.9 2-2-.895-2-2-2Zm-4 2a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"></path></svg>
 </div>

        <div class="item" onclick="window.location = '';">
            تنظیمات
            <svg fill="none" style="width: 30px; height: 30px; margin-left: 8px;" viewBox="0 0 24 24"><path fill="currentColor" d="M10.79 2h2.92l1.57 2.36c.11.17.32.25.53.21l2.53-.59 2.17 2.17-.58 2.54c-.05.2.04.41.21.53l2.36 1.57v2.92l-2.36 1.57c-.17.12-.26.33-.21.53l.58 2.54-2.17 2.17-2.53-.59a.51.51 0 0 0-.53.21l-1.57 2.36h-2.92l-1.58-2.36a.502.502 0 0 0-.52-.21l-2.54.59-2.17-2.17.58-2.54a.49.49 0 0 0-.21-.53L2 13.71v-2.92l2.35-1.57a.49.49 0 0 0 .21-.53l-.58-2.54 2.17-2.17 2.54.59c.2.04.41-.04.52-.21L10.79 2Zm1.07 2-.98 1.47c-.58.86-1.63 1.28-2.64 1.05l-1.46-.34-.6.6.33 1.46c.24 1.01-.18 2.07-1.05 2.64L4 11.86v.78l1.46.98c.87.57 1.29 1.63 1.05 2.64l-.33 1.46.6.6 1.46-.34c1.01-.23 2.06.19 2.64 1.05l.98 1.47h.78l.97-1.47c.58-.86 1.63-1.28 2.65-1.05l1.45.34.61-.6-.34-1.46c-.23-1.01.18-2.07 1.05-2.64l1.47-.98v-.78l-1.47-.98a2.493 2.493 0 0 1-1.05-2.64l.34-1.46-.61-.6-1.45.34c-1.02.23-2.07-.19-2.65-1.05L12.64 4h-.78Zm.39 6.75c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5c.82 0 1.5-.67 1.5-1.5s-.68-1.5-1.5-1.5Zm-3.5 1.5c0-1.93 1.56-3.5 3.5-3.5 1.93 0 3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5c-1.94 0-3.5-1.57-3.5-3.5Z"></path></svg>

        </div>

        <div class="item" onclick="window.location = '';">
             هوش مصنوعی
             <svg fill="none" style="width: 30px; height: 30px; margin-left: 8px;" viewBox="0 0 24 24"><path fill="currentColor" d="M5 22H2v-3c0-1.654 1.346-3 3-3s3 1.346 3 3-1.346 3-3 3Zm-1-2h1c.551 0 1-.449 1-1 0-.55-.449-1-1-1-.551 0-1 .45-1 1v1Zm7.594 1.282-.336-1.145a10.934 10.934 0 0 0-2.773-4.663 10.967 10.967 0 0 0-4.699-2.784l-1.151-.335L5.312 7h5.192c.613-.636 2.015-2.077 2.758-2.744C15.673 2.09 20.704 2.003 20.918 2l1.025-.013-.013 1.025c-.003.213-.09 5.245-2.256 7.656-.643.715-2.004 2.043-2.671 2.688v5.24l-5.407 2.687h-.002Zm.64-4.046c.207.396.393.802.557 1.217l2.21-1.099v-2.333l-2.768 2.214.001.001Zm-3.839-4.468a13.17 13.17 0 0 1 2.77 2.763l4.104-3.284c.269-.257 2.169-2.084 2.916-2.915 1.084-1.208 1.531-3.667 1.681-5.269-1.602.15-4.061.596-5.268 1.68-.832.748-2.658 2.647-2.916 2.916l-3.287 4.11ZM5.47 11.154c.414.163.819.347 1.214.551L8.849 9H6.548l-1.077 2.154-.001.001Z"></path></svg> </div>

        <div class="item" onclick="window.location = '';">
            کارنامه من
            <svg fill="none" style="width: 30px; height: 30px; margin-left: 8px;" viewBox="0 0 24 24"><path fill="currentColor" d="M1.998 5.5a2.5 2.5 0 0 1 2.5-2.5h15a2.5 2.5 0 0 1 2.5 2.5v13a2.5 2.5 0 0 1-2.5 2.5h-15a2.5 2.5 0 0 1-2.5-2.5v-13Zm2.5-.5a.5.5 0 0 0-.5.5v2.764l8 3.638 8-3.636V5.5a.5.5 0 0 0-.5-.5h-15Zm15.5 5.463-8 3.636-8-3.638V18.5a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-8.037Z"></path></svg>
        </div>

        <div class="item" onclick="window.location = '';">
             هم‌کلاسی ها
             <svg fill="none" style="width: 30px; height: 30px; margin-left: 8px;" viewBox="0 0 24 24"><path fill="currentColor" d="M12 5c-.83 0-1.5.67-1.5 1.5S11.17 8 12 8s1.5-.67 1.5-1.5S12.83 5 12 5ZM8.5 6.5C8.5 4.57 10.07 3 12 3s3.5 1.57 3.5 3.5S13.93 10 12 10 8.5 8.43 8.5 6.5Zm-3.25 1c-.41 0-.75.34-.75.75s.34.75.75.75.75-.34.75-.75-.34-.75-.75-.75Zm-2.75.75c0-1.52 1.23-2.75 2.75-2.75S8 6.73 8 8.25 6.77 11 5.25 11 2.5 9.77 2.5 8.25Zm16.25-.75c-.41 0-.75.34-.75.75s.34.75.75.75.75-.34.75-.75-.34-.75-.75-.75ZM16 8.25c0-1.52 1.23-2.75 2.75-2.75s2.75 1.23 2.75 2.75S20.27 11 18.75 11 16 9.77 16 8.25ZM12 13c-1.29 0-2.37.54-3.22 1.61C8 15.6 7.4 17.07 7.12 19h9.76c-.27-1.85-.83-3.28-1.57-4.28C14.45 13.58 13.34 13 12 13Zm-4.78.36C8.41 11.86 10.06 11 12 11c2.02 0 3.7.92 4.91 2.53 1.18 1.57 1.88 3.77 2.09 6.39l.08 1.08H4.92L5 19.92c.22-2.7.96-4.97 2.22-6.56ZM2.95 16c.16-.55.39-.97.66-1.28.4-.46.94-.72 1.64-.72v-2c-1.26 0-2.35.49-3.15 1.4-.78.89-1.22 2.11-1.35 3.51L.65 18H4v-2H2.95Zm18.95-2.6c.78.89 1.22 2.11 1.35 3.51l.1 1.09H20v-2h1.05c-.16-.55-.39-.97-.66-1.28-.4-.46-.94-.72-1.64-.72v-2c1.26 0 2.35.49 3.15 1.4Z"></path></svg> </div>

        <div class="item" onclick="window.location = '';">
            معلمان من
            <svg xmlns="http://www.w3.org/2000/svg" style="margin-left: 8px;" width="30px" height="30px" viewBox="0 0 1920 1920">
                <path d="M640.376 790.588c38.852 0 55.68 15.586 83.577 41.337 32.866 30.155 77.816 71.604 161.506 71.604 60.31 0 100.066-22.023 129.882-45.628-5.873 150.55-129.205 271.51-281.223 271.51-139.483 0-255.022-101.985-277.61-235.143 45.403-13.666 75.67-40.433 98.937-62.004 28.235-25.977 45.29-41.676 84.931-41.676ZM1920-.012V1129.4h-338.824v-112.94h225.883V112.93H112.94v903.53h112.941v112.94H0V-.01h1920ZM734.118 451.766c148.404 0 269.138 115.539 280.207 261.233-17.393 11.633-32.753 24.17-45.967 36.367-27.784 25.75-44.386 41.223-82.9 41.223-39.642 0-56.696-15.699-84.93-41.675-32.528-30.042-77.253-71.266-160.152-71.266-83.689 0-128.64 41.45-161.505 71.605-9.94 9.148-18.523 16.49-27.106 22.814v-37.948c0-155.633 126.607-282.353 282.353-282.353Zm737.731 262.475-310.136 826.955c-217.412 22.589-482.598 24.621-638.57-32.3l-38.851 106.164c232.659 84.932 614.852 48.339 747.332 39.755l7.115 2.71 1.242-3.275c.678 0 1.92-.113 2.71-.113l-31.849 87.078c-4.404 12.31-14.57 21.12-27.67 24.057-117.46 26.993-277.045 41.788-449.054 41.788-171.784 0-346.617-32.64-508.236-94.645V1459.2c0-75.67 50.598-142.758 123.22-163.426 123.896-35.35 251.406-53.76 382.192-53.647.904 0 1.807.226 2.824.226.564 0 1.016-.113 1.58-.113 126.27.452 255.474 17.958 387.502 54.664l37.045-106.617-14.683-4.63c-53.534-14.796-107.746-25.638-161.844-34.673 88.094-72.509 145.694-181.045 145.694-303.925V734.118c0-217.977-177.318-395.294-395.294-395.294-217.977 0-395.294 177.317-395.294 395.294v112.94c0 122.655 57.374 231.078 145.355 303.7-56.019 9.26-111.586 20.894-166.024 36.367-120.847 34.334-205.214 146.259-205.214 272.075v328.998l34.899 14.57C332.386 1879.453 535.228 1920 734.118 1920c180.367 0 348.762-15.812 474.24-44.612 50.371-11.633 90.917-47.096 108.536-95.322l31.85-87.078c14.343-39.303 7.567-82.22-18.41-114.748-12.988-16.376-29.59-28.687-48.226-36.254l295.454-787.99-105.713-39.756Z" fill-rule="evenodd"/>
            <script xmlns=""/></svg>   </div>


    </div>

    <script>
        const svgToggle = document.querySelector('.svg-toggle');
        const drawer = document.querySelector('.drawer');
        const overlay = document.querySelector('.overlay');

        svgToggle.addEventListener('click', () => {
            drawer.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', () => {
            drawer.classList.remove('show');
            overlay.classList.remove('show');
        });
    </script>
</body>
</html>
