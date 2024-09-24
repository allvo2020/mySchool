<?php
session_start();

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

        .item:hover {
            background-color: rgba(166, 169, 179, 0.863);
            transition-duration: 700ms;
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
        <!-- Check loggedIn -->
        <?php

if (isset($_SESSION['username'])) {
    // Panel
    ?>
    <div class="item">
            میزکار
            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 -0.5 25 25" fill="none" style="margin-left: 8px;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 10.0005H7.082C6.66587 9.99708 6.26541 10.1591 5.96873 10.4509C5.67204 10.7427 5.50343 11.1404 5.5 11.5565V17.4455C5.5077 18.3117 6.21584 19.0078 7.082 19.0005H9.918C10.3341 19.004 10.7346 18.842 11.0313 18.5502C11.328 18.2584 11.4966 17.8607 11.5 17.4445V11.5565C11.4966 11.1404 11.328 10.7427 11.0313 10.4509C10.7346 10.1591 10.3341 9.99708 9.918 10.0005Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.918 4.0006H7.082C6.23326 3.97706 5.52559 4.64492 5.5 5.4936V6.5076C5.52559 7.35629 6.23326 8.02415 7.082 8.0006H9.918C10.7667 8.02415 11.4744 7.35629 11.5 6.5076V5.4936C11.4744 4.64492 10.7667 3.97706 9.918 4.0006Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 13.0007H17.917C18.3333 13.0044 18.734 12.8425 19.0309 12.5507C19.3278 12.2588 19.4966 11.861 19.5 11.4447V5.55666C19.4966 5.14054 19.328 4.74282 19.0313 4.45101C18.7346 4.1592 18.3341 3.9972 17.918 4.00066H15.082C14.6659 3.9972 14.2654 4.1592 13.9687 4.45101C13.672 4.74282 13.5034 5.14054 13.5 5.55666V11.4447C13.5034 11.8608 13.672 12.2585 13.9687 12.5503C14.2654 12.8421 14.6659 13.0041 15.082 13.0007Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.082 19.0006H17.917C18.7661 19.0247 19.4744 18.3567 19.5 17.5076V16.4936C19.4744 15.6449 18.7667 14.9771 17.918 15.0006H15.082C14.2333 14.9771 13.5256 15.6449 13.5 16.4936V17.5066C13.525 18.3557 14.2329 19.0241 15.082 19.0006Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <script xmlns=""/></svg>
    </div>
    <?php
} else {
    // Login
    ?>
    <div class="item">
        ورود
        <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24" fill="none" style="margin-left: 8px;">
            <path d="M2.00098 11.999L16.001 11.999M16.001 11.999L12.501 8.99902M16.001 11.999L12.501 14.999" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9.00195 7C9.01406 4.82497 9.11051 3.64706 9.87889 2.87868C10.7576 2 12.1718 2 15.0002 2L16.0002 2C18.8286 2 20.2429 2 21.1215 2.87868C22.0002 3.75736 22.0002 5.17157 22.0002 8L22.0002 16C22.0002 18.8284 22.0002 20.2426 21.1215 21.1213C20.3531 21.8897 19.1752 21.9862 17 21.9983M9.00195 17C9.01406 19.175 9.11051 20.3529 9.87889 21.1213C10.5202 21.7626 11.4467 21.9359 13 21.9827" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
            <script xmlns=""/></svg>
</div>
    <?php
}
        ?>

        <div class="item" onclick="window.location = 'https://ble.ir/myschool_bugs';">
            گزارش مشکل
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none" style="margin-left: 8px;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 1C3.44772 1 3 1.44772 3 2V22C3 22.5523 3.44772 23 4 23C4.55228 23 5 22.5523 5 22V13.5983C5.46602 13.3663 6.20273 13.0429 6.99251 12.8455C8.40911 12.4914 9.54598 12.6221 10.168 13.555C11.329 15.2964 13.5462 15.4498 15.2526 15.2798C17.0533 15.1004 18.8348 14.5107 19.7354 14.1776C20.5267 13.885 21 13.1336 21 12.3408V5.72337C21 4.17197 19.3578 3.26624 18.0489 3.85981C16.9875 4.34118 15.5774 4.87875 14.3031 5.0563C12.9699 5.24207 12.1956 4.9907 11.832 4.44544C10.5201 2.47763 8.27558 2.24466 6.66694 2.37871C6.0494 2.43018 5.47559 2.53816 5 2.65249V2C5 1.44772 4.55228 1 4 1ZM5 4.72107V11.4047C5.44083 11.2247 5.95616 11.043 6.50747 10.9052C8.09087 10.5094 10.454 10.3787 11.832 12.4455C12.3106 13.1634 13.4135 13.4531 15.0543 13.2897C16.5758 13.1381 18.1422 12.6321 19 12.3172V5.72337C19 5.67794 18.9081 5.66623 18.875 5.68126C17.7575 6.18804 16.1396 6.81972 14.5791 7.03716C13.0776 7.24639 11.2104 7.1185 10.168 5.55488C9.47989 4.52284 8.2244 4.25586 6.83304 4.3718C6.12405 4.43089 5.46427 4.58626 5 4.72107Z" fill="#1C274C"/>
                <script xmlns=""/></svg>
        </div>


    </div>

    <script>
        const svgToggle = document.querySelector('.svg-toggle');
        const drawer = document.querySelector('.drawer');
        const overlay = document.querySelector('.overlay');
        const closeDrawerBtn = document.querySelector('.close-drawer');

        svgToggle.addEventListener('click', () => {
            drawer.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', () => {
            drawer.classList.remove('show');
            overlay.classList.remove('show');
        });

        closeDrawerBtn.addEventListener('click', () => {
            drawer.classList.remove('show');
            overlay.classList.remove('show');
        });
    </script>
</body>
</html>
