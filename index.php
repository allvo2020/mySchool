<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدرسه من | سامانه مدرسه هوشمند</title>
    <style>
        body {
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


    </style>
</head>
<body>
    <div class="header">
        <img src="https://blogix.ir/assets/svg/icon.svg" class="mdc-top-app-bar-image ml-2" style="height: 40px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 20 20" fill="none" class="svg-toggle">
            <path fill="#000000" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"/>
          <script xmlns=""/></svg>
    </div>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Drawer Menu -->
    <div class="drawer">
        <div class="item"></div>
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
