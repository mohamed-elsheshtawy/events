<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="./style.css">

    <style>
        html {
            height: 100%;
        }

        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Text Align */
        .text-c {
            text-align: center;
        }

        .text-l {
            text-align: left;
        }

        .text-r {
            text-align: right
        }

        .text-j {
            text-align: justify;
        }

        /* Text Color */
        .text-whitesmoke {
            color: whitesmoke
        }

        .text-darkyellow {
            color: rgba(255, 235, 59, 0.432)
        }

        /* Lines */

        .line-b {
            border-bottom: 1px solid #FFEB3B !important;
        }

        /* Buttons */
        .button {
            border-radius: 3px;
        }

        .form-button.margin-b.form-control {
            background-color: rgba(255, 235, 59, 0.24);
            border-color: rgba(255, 235, 59, 0.24);
            color: #e6e6e6;
        }

        .form-button.margin-b.form-control:hover,
        .form-button.margin-b.form-control:focus,
        .form-button.margin-b.form-control:active,
        .form-button.margin-b.form-control.active,
        .form-button:.margin-b.form-controlactive:focus,
        .form-button:active:hover,
        .form-button.active:hover,
        .form-button.active:focus {
            background-color: rgba(255, 235, 59, 0.473);
            border-color: rgba(255, 235, 59, 0.473);
            color: #e6e6e6;
        }

        .button-l {
            width: 100% !important;
        }

        /* Margins g(global) - l(left) - r(right) - t(top) - b(bottom) */

        .margin-g {
            margin: 15px;
        }

        .margin-g-sm {
            margin: 10px;
        }

        .margin-g-md {
            margin: 20px;
        }

        .margin-g-lg {
            margin: 30px;
        }

        .margin-l {
            margin-left: 15px;
        }

        .margin-l-sm {
            margin-left: 10px;
        }

        .margin-l-md {
            margin-left: 20px;
        }

        .margin-l-lg {
            margin-left: 30px;
        }

        .margin-r {
            margin-right: 15px;
        }

        .margin-r-sm {
            margin-right: 10px;
        }

        .margin-r-md {
            margin-right: 20px;
        }

        .margin-r-lg {
            margin-right: 30px;
        }

        .margin-t {
            margin-top: 60px;
            font-size: 22px;

        }

        .margin-t-sm {
            margin-top: 10px;
        }

        .margin-t-md {
            margin-top: 20px;
        }

        .margin-t-lg {
            margin-top: 30px;
        }

        .margin-b {
            margin-bottom: 15px;
        }

        .margin-b-sm {
            margin-bottom: 10px;
        }

        .margin-b-md {
            margin-bottom: 20px;
        }

        .margin-b-lg {
            margin-bottom: 30px;
        }

        /* Bootstrap Form Control Extension */

        .form-control,
        .border-line {
            background-color: #5f5f5f;
            background-image: none;
            border: 1px solid #424242;
            border-radius: 1px;
            color: inherit;
            display: block;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
        }

        .form-control:focus,
        .border-line:focus {
            border-color: #FFEB3B;
            background-color: #616161;
            color: #e6e6e6;
        }

        .form-control,
        .form-control:focus {
            box-shadow: none;
        }

        .form-control::-webkit-input-placeholder {
            color: #BDBDBD;
        }

        /* Container */

        .container-content {
            background-color: #3a3a3aa2;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #FFEB3B;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }

        /* Backgrounds */

        .main-bg {

            background-image: -webkit-linear-gradient(120deg, #505add 0%, #df42b1 100%);

        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: black;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background-image: -webkit-linear-gradient(120deg, #505add 0%, #df42b1 100%);
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background-image: -webkit-linear-gradient(120deg, #df42b1 0%, #505add 100%);
        }

        /* Login & Register Pages*/

        .login-container {
            max-width: 400px;
            z-index: 100;
            margin: 0 auto;
            padding-top: 200px;
        }

        .login.login-container {
            width: 300px;
        }

        .wrapper.login-container {
            margin-top: 140px;
        }

        .logo-badge {
            color: #e6e6e6;
            font-size: 80px;
            font-weight: 800;
            letter-spacing: -10px;
            margin-bottom: 0;
        }

        .main-bg {
            min-height: 100vh !important;
        }

        .login-container {
            max-width: 400px;
            z-index: 100;
            margin: 0 auto;
            padding-top: 0;
            background: black;
            position: relative;
            top: 64px;
            border-radius: 41px;
        }

        .container-content {
            background-color: black !important;
            border-color: #7c53d0;
            padding: 0 20px 20px 20px;
        }

        .form-button.margin-b.form-control {
            background-color: #7c53d0;
            border-color: #7c53d0;
            color: #e6e6e6;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>

        </div>

        <div class="w-full sm:max-w-md  px-6  bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

</html>