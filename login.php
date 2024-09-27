<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود | مدرسه من</title>
    <style>
        @font-face {
            font-family: 'vazir';
            src: url('Vazir-Medium.ttf');
        }

        body {
            font-family: 'vazir';
            margin: 0;
            display: flex;
            justify-content: center;
            background-color: #EDF0FF;
        }

        .header {
            background-color: #EDF0FF;
            padding: 10px;
            position: fixed;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #c9c9c9;
        }
        .svg-toggle {
            cursor: pointer;
            padding: 4px;
            border-radius: 50%;
            margin-left: 8px;
        }

        .svg-toggle:hover {
            background-color: rgba(166, 169, 179, 0.863);
            transition-duration: 700ms;
        }

        /* rotate logo when click back */
        .rotate {
    animation: rotate-animation 700ms forwards;
}

@keyframes rotate-animation {
    from {
        transform: rotate(0deg); 
    }
    to {
        transform: rotate(360deg);
    }
}


* {
    box-sizing: border-box;
}

.flex {
    display: flex;
    color: #1C274C;
    align-items: center;
    justify-content: right;
    font-size: 1.3rem;
}

#login {
    display: flex;
    flex-direction: column;
    align-items: end;
    justify-content: center;
    top: 90px;
    position: relative;
    padding: 10px;
}
input {
  height: 3em;
  box-sizing: border-box;
  width: 100%;
}

input[type="text"] {
  height: calc(3em + (1px * 2)); /* Assuming default border is 1px */
  margin: 0 0 1em;
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 15px; /* If we assume radius is half of height */
  background: #fff;
  resize: none;
  outline: none;
}

input[type="text"]:required:focus {
  border-color: #005ecb;
}

input[type="text"]:required:focus + label[placeholder]:before {
  color: #005ecb;
}

input[type="text"]:required:focus,
input[type="text"]:required:valid {
  + label[placeholder]:before {
    transition-duration: .2s;
    transform: translate(0, -1.5em) scale(0.9, 0.9); /* -1.5 * margin */
  }
}

input[type="text"]:required:invalid + label[placeholder][alt]:before {
  content: attr(alt);
}

input[type="text"] + label[placeholder] {
  display: block;
  pointer-events: none;
  line-height: 1.25em; /* Margin * 1.25 */
  margin-top: calc(-3em - (1px * 2)); /* Negative height + borders */
  margin-bottom: calc((3em - 1em) + (1px * 2)); /* Height - margin + borders */
}

input[type="text"] + label[placeholder]:before {
    content: attr(placeholder);
  display: inline-block;
  color: #898989;
  white-space: nowrap;
  transition: .3s ease-in-out;
  background-image: linear-gradient(to bottom, #fff, #fff);
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-position: bottom;
  margin-top: 3px;
  border-radius: 10px 10px 0px 0px;
  padding: 3px;
  margin-right: 12px;
}


.btn {
    padding: 15px;
    background: linear-gradient(#335eea, #406dff);
    margin-top: 20px;
    color: #fff;
    outline: none;
    border: none;
    border-radius: 15px;
    width: 100%;
    font-size: 18px;
    font-family: 'vazir';
}

.red {
    color: rgb(245, 0, 0);
    direction: rtl;
    font-size: 14px;
}

.responsive {
    display: flex;
    align-items: center;
    flex-direction: column;
    width: 40%;
}

@media screen and (max-width: 500px) {
    .responsive {
    width: 100%;
}
}

    </style>
</head>
<body>
    <div class="responsive">
    <div class="header">
        <img src="https://blogix.ir/assets/svg/icon.svg" id="logo" style="height: 40px;">
        <div class="flex">
            ورود
        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none" class="svg-toggle" onclick="setInterval(() => { history.back(); }, 600); document.getElementById('logo').classList.add('rotate');">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="#000"/>
            <script xmlns=""/></svg>
        </div>
    </div>

   <!-- Login / signin Form -->
    <form id="login">
            <input type="text" required>
            <label placeholder="نام کاربری" alt="نام کاربری"></label>


            <input type="text" required style="margin-top: -7px;">
            <label placeholder="رمزعبور" alt="رمزعبور"></label>

            <span class="red">* رمزعبور پیش فرض شماره تلفن شما و نام کاربری شما، کدملی شما می باشد!</span>

            <button class="btn" type="submit">ورود</button>
  </form>
    </div>
</body>
</html>
