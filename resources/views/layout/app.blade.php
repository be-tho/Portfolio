<!DOCTYPE html>
<html lang="es_Es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beto | @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<header class="bg-nav">
    <nav class="p-5 text-white bg-nav shadow md:flex md:items-center md:justify-between mx-auto
    2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] max-[320px]:px-[12px]
    sm:max-w-[540px] fixed top-0 left-0 right-0 md:static md:bg-nav md:shadow-none z-50 pb-6
    ">
        <div class="flex justify-between items-center">
            <span class="text-2xl cursor-pointer">
                <img class="h-8 inline" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQixYgLSSVCB9SR2aVkiQrahyp5aKUjECFFqEGLLCJNcw&s" alt="">
                Beto Villarroel
            </span>
            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu-outline" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <ul class="menu-ul md:flex md:items-center md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0 cursor-pointer">
                <a href="/#home" class="text-xl hover:text-purple-500 duration-500 cursor-pointer">HOME</a>
            </li>
            <li class="mx-4 my-6 md:my-0 cursor-pointer">
                <a href="/#service" class="text-xl hover:text-purple-500 duration-500">SERVICE</a>
            </li>
            <li class="mx-4 my-6 md:my-0 cursor-pointer">
                <a href="/#about" class="text-xl hover:text-purple-500 duration-500">ABOUT</a>
            </li>
            <li class="mx-4 my-6 md:my-0 cursor-pointer">
                <a href="/#cv" class="text-xl hover:text-purple-500 duration-500">CV</a>
            </li>
            <li class="mx-4 my-6 md:my-0 cursor-pointer">
                <a href="#" class="text-xl hover:text-purple-500 duration-500">BLOG</a>
            </li>
        </ul>
    </nav>
</header>
<main class="p-4 pt-24 md:pt-4 mx-auto
    2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] max-[320px]:px-[12px]
    sm:max-w-[540px]">
    @yield('content')
</main>
<footer class="p-4 text-white">
    <div class="mx-auto text-center">
        <p>Copyright 2024    © Beto all rights reserved.</p>
    </div>
{{--    boton para hacer scroll al top --}}
    <div class="fixed bottom-5 right-5">
        <a href="#home" class="text-3xl text-white hover:text-purple-500 duration-500">
            <ion-icon name="arrow-up-circle-outline"></ion-icon>
        </a>
    </div>
</footer>
<script>
    function Menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
        //cuando haga click en el a del menu cerrar el nav
        let links = document.querySelectorAll('.menu-ul li');
        links.forEach(link => {
            link.addEventListener('click', () => {
                e.name = "menu";
                list.classList.remove('top-[80px]');
                list.classList.remove('opacity-100');
            })
        })

    }
</script>
</body>
</html>
