<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@if (trim($__env->yieldContent('template_title'))) @yield('template_title') | @endif {{ config('app.name',
    'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');

    :root {
      --background: #ffffff;
      --navbar-width: 256px;
      --navbar-width-min: 80px;
      --navbar-dark-primary: #231f20;
      --navbar-dark-secondary: #115f42;
      --navbar-light-primary: #ffffff;
      --navbar-light-secondary: #ffffff;
    }

    * {
      font-family: 'Work Sans', sans-serif;
    }


    #nav-toggle:checked~#nav-header {
      width: calc(var(--navbar-width-min) - 16px);
    }

    #nav-toggle:checked~#nav-content,
    #nav-toggle:checked~#nav-footer {
      width: var(--navbar-width-min);
    }

    #nav-toggle:checked~#nav-header #nav-title {
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.1s;
    }

    #nav-toggle:checked~#nav-header label[for=nav-toggle] {
      left: calc(50% - 8px);
      transform: translate(-50%);
    }

    #nav-toggle:checked~#nav-header #nav-toggle-burger {
      background: var(--navbar-light-primary);
    }

    #nav-toggle:checked~#nav-header #nav-toggle-burger:before,
    #nav-toggle:checked~#nav-header #nav-toggle-burger::after {
      width: 16px;
      background: var(--navbar-light-secondary);
      transform: translate(0, 0) rotate(0deg);
    }

    #nav-toggle:checked~#nav-content .nav-button span {
      opacity: 0;
      transition: opacity 0.1s;
    }

    #nav-toggle:checked~#nav-content .nav-button .bx {
      min-width: calc(100% - 16px);
    }

    #nav-toggle:checked~#nav-footer #nav-footer-avatar {
      margin-left: 0;
      left: 50%;
      transform: translate(-50%);
    }

    #nav-toggle:checked~#nav-footer #nav-footer-titlebox,
    #nav-toggle:checked~#nav-footer label[for=nav-footer-toggle] {
      opacity: 0;
      transition: opacity 0.1s;
      pointer-events: none;
    }

    #nav-bar {
      position: absolute;
      left: 1vw;
      top: 1vw;
      height: calc(100% - 2vw);
      background: var(--navbar-dark-primary);
      border-radius: 16px;
      display: flex;
      flex-direction: column;
      color: var(--navbar-light-primary);
      overflow: hidden;
      user-select: none;
    }

    #nav-bar hr {
      margin: 0;
      position: relative;
      left: 16px;
      width: calc(100% - 32px);
      border: none;
      border-top: solid 1px var(--navbar-dark-secondary);
    }

    #nav-bar a {
      color: inherit;
      text-decoration: inherit;
    }

    #nav-bar input[type=checkbox] {
      display: none;
    }

    #nav-header {
      position: relative;
      width: var(--navbar-width);
      left: 16px;
      width: calc(var(--navbar-width) - 16px);
      min-height: 80px;
      background: var(--navbar-dark-primary);
      border-radius: 16px;
      z-index: 2;
      display: flex;
      align-items: center;
      transition: width 0.2s;
    }

    #nav-header hr {
      position: absolute;
      bottom: 0;
    }

    #nav-title {
      font-size: 15px;
      transition: opacity 1s;
    }

    label[for=nav-toggle] {
      position: absolute;
      right: 0;
      width: 3rem;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    #nav-toggle-burger {
      position: relative;
      width: 16px;
      height: 2px;
      background: var(--navbar-dark-primary);
      border-radius: 99px;
      transition: background 0.2s;
    }

    #nav-toggle-burger:before,
    #nav-toggle-burger:after {
      content: "";
      position: absolute;
      top: -6px;
      width: 10px;
      height: 2px;
      background: var(--navbar-light-primary);
      border-radius: 99px;
      transform: translate(2px, 8px) rotate(30deg);
      transition: 0.2s;
    }

    #nav-toggle-burger:after {
      top: 6px;
      transform: translate(2px, -8px) rotate(-30deg);
    }

    #nav-content {
      margin: -16px 0;
      padding: 16px 0;
      position: relative;
      flex: 1;
      width: var(--navbar-width);
      background: var(--navbar-dark-primary);
      box-shadow: 0 0 0 16px var(--navbar-dark-primary);
      direction: rtl;
      overflow-x: hidden;
      transition: width 0.2s;
    }

    #nav-content::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    #nav-content::-webkit-scrollbar-thumb {
      border-radius: 99px;
      background-color: #ffffff;
    }

    #nav-content-highlight {
      position: absolute;
      left: 16px;
      top: -70px;
      width: calc(100% - 16px);
      height: 54px;
      background: var(--background);
      background-attachment: fixed;
      border-radius: 16px 0 0 16px;
      transition: top 0.2s;
    }

    #nav-content-highlight:before,
    #nav-content-highlight:after {
      content: "";
      position: absolute;
      right: 0;
      bottom: 100%;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      box-shadow: 16px 16px var(--background);
    }

    #nav-content-highlight:after {
      top: 100%;
      box-shadow: 16px -16px var(--background);
    }

    .nav-button {
      position: relative;
      margin-left: 16px;
      height: 54px;
      display: flex;
      align-items: center;
      color: var(--navbar-light-secondary);
      direction: ltr;
      cursor: pointer;
      z-index: 1;
      transition: color 0.2s;
    }

    .nav-button span {
      transition: opacity 1s;
    }

    .nav-button .bx {
      transition: min-width 0.2s;
    }

    .nav-button:nth-of-type(1):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(1):hover~#nav-content-highlight {
      top: 16px;
    }

    .nav-button:nth-of-type(2):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(2):hover~#nav-content-highlight {
      top: 70px;
    }

    .nav-button:nth-of-type(3):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(3):hover~#nav-content-highlight {
      top: 124px;
    }

    .nav-button:nth-of-type(4):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(4):hover~#nav-content-highlight {
      top: 178px;
    }

    .nav-button:nth-of-type(5):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(5):hover~#nav-content-highlight {
      top: 232px;
    }

    .nav-button:nth-of-type(6):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(6):hover~#nav-content-highlight {
      top: 286px;
    }

    .nav-button:nth-of-type(7):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(7):hover~#nav-content-highlight {
      top: 340px;
    }

    .nav-button:nth-of-type(8):hover {
      color: var(--navbar-dark-primary);
    }

    .nav-button:nth-of-type(8):hover~#nav-content-highlight {
      top: 394px;
    }

    #nav-bar .bx {
      min-width: 3rem;
      text-align: center;
    }

    #nav-footer {
      position: relative;
      width: var(--navbar-width);
      height: 54px;
      background: var(--navbar-dark-secondary);
      border-radius: 16px;
      display: flex;
      flex-direction: column;
      z-index: 2;
      transition: width 0.2s, height 0.2s;
    }

    #nav-footer-heading {
      position: relative;
      width: 100%;
      height: 54px;
      display: flex;
      align-items: center;
    }

    #nav-footer-avatar {
      position: relative;
      margin: 11px 0 11px 16px;
      left: 0;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      overflow: hidden;
      transform: translate(0);
      transition: 0.2s;
    }

    #nav-footer-avatar img {
      height: 100%;
    }

    #nav-footer-titlebox {
      position: relative;
      margin-left: 16px;
      width: 10px;
      display: flex;
      flex-direction: column;
      transition: opacity 1s;
    }

    #nav-footer-subtitle {
      color: var(--navbar-light-secondary);
      font-size: 0.6rem;
    }

    #nav-footer-toggle:checked+#nav-footer {
      height: 30%;
      min-height: 54px;
    }

    #nav-footer-toggle:checked+#nav-footer label[for=nav-footer-toggle] {
      transform: rotate(180deg);
    }

    label[for=nav-footer-toggle] {
      position: absolute;
      right: 0;
      width: 3rem;
      height: 100%;
      display: flex;
      align-items: center;
      cursor: pointer;
      transition: transform 0.2s, opacity 0.2s;
    }

    #nav-footer-content {
      margin: 0 16px 16px 16px;
      border-top: solid 1px var(--navbar-light-secondary);
      padding: 16px 0;
      color: var(--navbar-light-secondary);
      font-size: 0.8rem;
      overflow: auto;
    }

    #nav-footer-content::-webkit-scrollbar {
      width: 8px;
      height: 8px;
    }

    #nav-footer-content::-webkit-scrollbar-thumb {
      border-radius: 99px;
      background-color: #ffffff;
    }

    .container {
      justify-content: center;
      align-items: center;
    }


    .opPerfil {
      width: 100%;
      background-color: #231f20;
      color: white;
    }

    .opPerfil:hover {
      width: 100%;
      background-color: white;
      color: #231f20;
    }

    /*
.opPerfil {
  width: 100%;
}
*/
    .bx {
      font-size: 23px;
    }

    .imgCensa {
      width: 40px;
      margin-left: 12px;
      margin-right: 7px;
    }

    .opNav {
      color: black;
      margin-left: 3%;
      margin-right: 3%;
      height: 91vh;
      overflow: auto;
      padding-top: -3%;
      padding-right: 2%;
      scrollbar-width: thin;
      scrollbar-color: darkgrey lightgrey;
      margin-right: 7px;
      padding-top: 1%;
    }

    .cabeceraVentana {
      padding-top: 1%;
      margin-bottom: -0.9%;
    }

    .contMay {
      border-radius: 15px;
      color: black;
      margin-left: 9%;
      margin-right: 3%;
      height: 96vh;
      margin-top: 1%;
      margin-bottom: 1%;
      padding-top: 0.5%;
    }

    .opNav::-webkit-scrollbar {
      width: 10px;
      padding-top: 2%;
    }

    .opNav::-webkit-scrollbar-track {
      background: #ffffff;
    }

    .opNav::-webkit-scrollbar-thumb {
      background-color: #231f20;
      border-radius: 99px;
    }

    .opNav::-webkit-scrollbar-corner {
      background: lightgrey;
    }


    @import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');

    html,
    body {
      margin: 0;
      width: auto;
      background-size: cover;
      background-image: url('../img/asd.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      -webkit-font-smoothing: antialiased;
      scroll-behavior: smooth;
      box-sizing: border-box;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(1px);
      -webkit-backdrop-filter: blur(8px);
      border: none;
    }

    * {
      font-family: 'Work Sans', sans-serif;
    }

    .loader {
      width: 20px;
      height: 20px;
      border: 3px solid #FFF;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      box-sizing: border-box;
      animation: rotation 1s linear infinite;
    }

    .loader::after {
      content: '';
      box-sizing: border-box;
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 30px;
      height: 30px;
      border-radius: 50%;
      border: 3px solid transparent;
      border-bottom-color: #00ff4c;
    }

    @keyframes rotation {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    .ag-theme-material {
      border-radius: 8px;
      overflow: hidden;
    }

    .ag-header-row ag-header-row-column {
      font: bold;
    }
  </style>
  <div id="admin">
    <div id="nav-bar" style="z-index:110;">
      <input id="nav-toggle" type="checkbox" checked="false" />
      <div id="nav-header"><a id="nav-title" target="_blank"><img class=""
            src="https://i.ibb.co/zX3xP2B/camisas-Med.png " width="200px" alt="" border="0"></a>
        <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
      </div>
      <!-- <div id="nav-content">
            <div class="nav-button"><i class='bx bx-table'></i><span>Administrar DB</span></div>
            <div class="nav-button" id="whatsapp"><i class='bx bxl-whatsapp'></i><span>WhatsApp</span></div>
            <div class="nav-button" id="sms"><i class='bx bxs-message-dots'></i><span>SMS</span></div>
            <div class="nav-button" id="informes"><i class='bx bxs-report'></i><span>Informes</span></div>
            <div id="nav-content-highlight"></div>
        </div> -->
      <style>
        a {
          text-decoration: none;
        }
      </style>>
      <div id="nav-content">
        <div class="nav-button"><a href="/marcas"><i class='bx bxs-registered'></i><span>Marcas</span></a></div>
        <div class="nav-button"><a href="/productos"><i class='bx bxs-t-shirt'></i><span>Productos</span></a></div>
        <div id="nav-content-highlight"></div>
      </div>


    </div>
  </div>
  <div id="contMay" class="contMay card card-body shadow">
    <div class="opNav">
      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </div>


  </div>
</body>

</html>