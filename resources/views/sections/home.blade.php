@extends('layout.app')
@section('title', 'Home')
@section('content')
    <div id="inicio" class="p-4 pt-2 md:pt-20 mx-auto
    2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] max-[320px]:px-[12px]
    sm:max-w-[540px]">
        <div class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] py-5 md:pb-20 px-4">
            <div class="w-full h-[70vh] max-[320px]:h-[50vh] flex items-center px-2 2xl:max-w-lg xl:max-w-lg lg:max-w-lg lg:w-1/2 lg:mx-0 md:max-w-lg md:w-1/2 md:mx-0 2xl:w-1/2 xl:w-1/2 sm:items-center">
                <div class="text-center 2xl:text-left xl:text-left lg:text-left md:text-left h-72">
                    <span class="text-[#7963e0] text-lg font-bold">Hola, me llamo </span>
                    <h1 class="text-[#fff] 2xl:text-6xl xl:text-5xl lg:text-[50px] md:text-[45px] text-[40px] font-bold">
                        Albert Villarroel</h1>
                    <h2 class="py-4 text-white text-xl font-bold">Soy front developer</h2>
                    <p class="pt-2 text-gray-500 text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        enim ratione eligendi expedita!</p>
                    <button type="button" class="text-white mt-8 bg-[#7963e0] hover:bg-opacity-80 no-underline font-medium rounded-full text-sm px-8 py-2.5 mr-2">
                        CV</button>
                </div>
            </div>
            <div class="w-1/2 hidden px-2 2xl:block xl:block lg:block md:block z-10">
                <img src="{{asset('img/girl-dark.png')}}" alt="girl" class="max-h-full">
            </div>
        </div>
    </div>
    <div class="relative">
        <img src="{{asset('img/hero-shape-dark.png')}}" alt="hero-shape" class="absolute bottom-0 left-0 right-0 w-full bg-center z-10 bg-cover">
    </div>
    <div class="p-4 pt-24 md:pt-4 mx-auto
    2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] max-[320px]:px-[12px]
    sm:max-w-[540px]">
    </div>
    <section id="skills" class="2xl:py-[80px] py-[70px] bg-[#120f1c] relative">
        <div class="banner text-center mb-[30px] aos-init aos-animate">
            <span class="text-[14px] text-[#ddd]">MEJORES SKILLS</span>
            <h2 class="text-center text-[#ddd] mt-[5px] 2xl:text-[35px] xl:text-[33px] lg:text-[30px] md:text-[26px] sm:text-[24px] text-[22px] font-bold">
                Lo mejor que<span class="text-[#7963e0]">
                    Ofresco</span></h2>
        </div>
        <div class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] max-[320px]:px-[12px] px-6">
            <div class="grid lg:grid-cols-3 md:grid-cols-1 gap-[30px]">
                <div class="transition-all rounded flex justify-start items-start aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <div class="pr-6 border-r border-[#7963e0] max-[480px]:hidden">
                        <h6 class="2xl:text-[50px] lg:text-[40px] text-[35px] font-bold text-[#7963e0] 2xl:w-[60px] xl:w-[60px] lg:w-[50px] w-[40px] opacity-50">01</h6>
                    </div>
                    <div class="pl-6 border-l border-[#27213b]">
                        <div class="flex">
                            <img src="{{asset('img/html-5.png')}}" alt="service-1" class="bg-white rounded-lg">
                        </div>
                        <h4 class="text-[20px] text-[#ddd] pt-6 font-bold"> Front-end</h4>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">HTML5: Creo páginas web semánticas y accesibles utilizando HTML5 para garantizar una excelente estructura de contenido.</p>
                        <p>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">CSS3: Diseño interfaces atractivas y receptivas con CSS3, asegurando una experiencia de usuario consistente en diversos dispositivos.</p>
                        <p>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">JavaScript y React: Implemento funcionalidades interactivas y dinámicas con JavaScript, y he desarrollado aplicaciones web completas utilizando React, Laravel.</p>
                    </div>
                </div>
                <div class="transition-all rounded flex justify-start items-start aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <div class="pr-6 border-r border-[#7963e0] max-[480px]:hidden">
                        <h6 class="2xl:text-[50px] lg:text-[40px] text-[35px] font-bold text-[#7963e0] 2xl:w-[60px] xl:w-[60px] lg:w-[50px] w-[40px] opacity-50">02</h6>
                    </div>
                    <div class="pl-6 border-l border-[#27213b]">
                        <div class="flex">
                            <img src="{{asset('img/node.png')}}" alt="service-2" class="bg-white rounded-lg">
                        </div>
                        <h4 class="text-[20px] text-[#ddd] pt-6 font-bold">Back-end</h4>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">Node.js y Express: Construyo servidores y API robustos con Node.js y Express, lo que me permite manejar solicitudes de manera eficiente y proporcionar datos a aplicaciones web.</p>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">MongoDB y Mongoose: Tengo experiencia en el diseño de bases de datos NoSQL utilizando MongoDB y Mongoose para garantizar un almacenamiento eficiente y escalable de datos.</p>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">RESTFUL API: Diseño y desarrollo APIs RESTful que permiten la comunicación entre el front-end y el back-end.</p>
                    </div>
                </div>
                <div class="transition-all rounded flex justify-start items-start aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <div class="pr-6 border-r border-[#7963e0] max-[480px]:hidden">
                        <h6 class="2xl:text-[50px] lg:text-[40px] text-[35px] font-bold text-[#7963e0] 2xl:w-[60px] xl:w-[60px] lg:w-[50px] w-[40px] opacity-50">03</h6>
                    </div>
                    <div class="pl-6 border-l border-[#27213b]">
                        <div class="flex">
                            <img src="{{asset('img/git.png')}}" alt="service-3" class="bg-white rounded-lg">
                        </div>
                        <h4 class="text-[20px] text-[#ddd] pt-6 font-bold">Herramientas y Tecnologías Adicionales:</h4>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">Git: Utilizo Git para el control de versiones y colaboración en equipo, lo que garantiza un flujo de trabajo eficiente y una gestión de código sin problemas. </p>
                        <p class="pt-2 text-[#999] text-[15px] leading-[28px]">NPM y Yarn: Gestiono dependencias y paquetes de manera efectiva utilizando NPM y Yarn para mantener mis proyectos actualizados y seguros.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="2xl:border-b 2xl:pt-24 2xl:border-[#27213b] lg:border-b lg:border-[#27213b] lg:pt-12 pt-0 flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] px-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300"></div>
    </section>
    <section id="sobre-mi" class="bg-[#120f1c] 2xl:pb-[80px] pb-[70px]">
        <div class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] max-[320px]:px-[12px]">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] px-6 max-[320px]:px-[0px]">
                <div class="transition-all relative aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <img src="{{asset('img/img-01.jpg')}}" alt="about-img-1" class="w-full rounded-lg">
                </div>
                <div class="transition-all aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
                    <div class="banner mb-3">
                        <span class="text-[14px] text-[#ddd]">SOBRE MI</span>
                        <h2 class="text-white mt-[5px] 2xl:text-[35px] xl:text-[33px] lg:text-[30px] md:text-[26px] sm:text-[24px] text-[22px] font-bold">
                            Apasionado, Experto, Colaborativo, Creativo y sobre todo <span class="text-[#7963e0]">Comprometido</span></h2>
                    </div>
                    <p class="text-[16px] text-[#777] 2xl:mb-[31px] xl:mb-[35px] lg:mb-[10px] mb-[25px]">Soy un apasionado programador con una obsesión por encontrar soluciones ingeniosas a cualquier desafío, ya sea en el emocionante mundo del desarrollo frontend o en las profundidades del backend. Para mí, la programación no es solo un trabajo, sino una verdadera pasión.</p>
                    <div class="border border-[#27213b] p-[24px] rounded-lg">
                        <div class="box-border flex justify-between max-[400px]:block">
                            <div class="left">
                                <div class="name">
                                    <span class="text-white text-[16px] leading-[28px] font-bold">Nombre Completo :</span><br>
                                    <span class="detail text-[14px] leading-[28px] text-[#777]">Yiye Albert Villarroel</span>
                                </div>
                                <div class="age pt-[20px]">
                                    <span class="text-white text-[16px] leading-[28px] font-bold">Edad</span><br>
                                    <span class="detail text-[14px] leading-[28px] text-[#777]">33 Años</span>
                                </div>
                            </div>
                            <div class="right">
                                <div class="ph">
                                    <span class="text-white text-[16px] leading-[28px] font-bold">Telefono</span><br>
                                    <span class="detail text-[14px] leading-[28px] text-[#777]">+54 1154825028</span>
                                </div>
                                <div class="email pt-[20px]">
                                    <span class="text-white text-[16px] leading-[28px] font-bold">Email :</span><br>
                                    <span class="detail text-[14px] leading-[28px] text-[#777]">yiyevp@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom pt-[20px]">
                            <span class="text-white text-[16px] font-bold">Github</span>
                            <a href="https://github.com/be-tho/" target="_blank" class="cursor-pointer">
                                <span class="detail text-[14px] text-[#777]">Be-tho</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="section-Portfolio 2xl:py-[80px] py-[70px] bg-[#161321]">
        <div class="banner text-center mb-[30px] aos-init aos-animate">
            <h2 class="text-center mt-[5px] text-white 2xl:text-[35px] xl:text-[33px] lg:text-[30px] md:text-[26px] sm:text-[24px] text-[22px] font-bold">
                Mi <span class="text-[#7963e0]"> PORTFOLIO</span></h2>
        </div>
        <div class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] max-[320px]:px-[12px] px-6">
            <div class="m-b-minus-24px w-full">
                <div class="portfolio-content aos-init aos-animate">
                    <div class="portfolio-tabs mb-[30px]">
                        <ul class="2xl:flex xl:flex md:flex sm:block place-content-center text-center">
                            <li id="todo" class="text-[14px] text-[#ddd] 2xl:mx-[10px] sm:mx-[0px] px-[10px] leading-[11px] font-semibold hover:text-[#7963e0] cursor-pointer inline-block active mixitup-control-active">
                                TODO</li>
                            <li class="text-[14px] text-[#ddd] 2xl:mx-[10px] sm:mx-[0px] px-[10px] leading-[11px] font-semibold hover:text-[#7963e0] cursor-pointer inline-block " id="diseno">DISEÑO</li>
                            <li class="text-[14px] text-[#ddd] 2xl:mx-[10px] sm:mx-[0px] px-[10px] leading-[11px] font-semibold hover:text-[#7963e0] cursor-pointer inline-block " id="desarrollo">DESARROLLO</li>
                            <li class="text-[14px] text-[#ddd] 2xl:mx-[10px] sm:mx-[0px] px-[10px] leading-[11px] font-semibold hover:text-[#7963e0] cursor-pointer inline-block transition-all ease-in duration-500">GRAFICOS</li>
                            <li class="text-[14px] text-[#ddd] 2xl:mx-[10px] sm:mx-[0px] px-[10px] leading-[11px] font-semibold hover:text-[#7963e0] cursor-pointer inline-block">TEMPLATES</li>
                        </ul>
                    </div>
                    <div class="portfolio-content-items">
                        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div class="mix graphics templates proyecto desarrollo">
                                <div class="portfolio-img truncate rounded-2xl relative">
                                    <img src="{{asset('img/portfolio/work-1.jpg')}}" alt="graphics" class="w-full transform hover:bg-blue-600 transition duration-500 hover:-rotate-12 hover:scale-125">
                                    <h3 class="top-contain absolute top-[15px] right-[15px]">
                                        <span class="bg-black rounded-full text-white font-normal text-[12px] px-2 py-1">3D
                                            Graphics</span>
                                        <span class="bg-black rounded-full text-white font-normal text-[12px] px-2 py-1">Templates</span>
                                    </h3>
                                    <div class="bottom-contain absolute bottom-4 left-4 right-4">
                                        <div class="overlay-info px-4 py-2 bg-black bg-opacity-60 rounded-xl grid grid-cols-2 gap-[30px] place-content-between">
                                            <a href="#" class="text-white text-sm flex items-center">Nitro - Car
                                                Service</a>
                                            <a href="assets/img/portfolio/img-1.jpg" data-fancybox="gallery" class="text-white text-sm grid justify-items-end">
                                                <p class="hidden">.</p>
                                                <span class="bg-[#7963e0] h-8 w-8 flex justify-center items-center rounded-md">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix proyecto diseno">
                                <div class="portfolio-img truncate rounded-2xl relative">
                                    <img src="{{asset('img/portfolio/work-2.jpg')}}" alt="design" class="w-full transform hover:bg-blue-600 transition duration-500 hover:-rotate-12 hover:scale-125">
                                    <h3 class="top-contain absolute top-[15px] right-[15px]">
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">Web
                                            Design</span>
                                    </h3>
                                    <div class="bottom-contain absolute bottom-4 left-4 right-4">
                                        <div class="overlay-info px-4 py-2 bg-black bg-opacity-60 rounded-xl grid grid-cols-2 gap-[30px] place-content-between">
                                            <a href="#" class="text-white text-sm flex items-center">Boros -
                                                Artificial Intelligence</a>
                                            <a href="assets/img/portfolio/img-2.jpg" data-fancybox="gallery" class="text-white text-sm grid justify-items-end">
                                                <p class="hidden">.</p>
                                                <span class="bg-[#7963e0] h-8 w-8 flex justify-center items-center rounded-md">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix desarrollo proyecto">
                                <div class="portfolio-img truncate rounded-2xl relative">
                                    <img src="{{asset('img/portfolio/work-3.jpg')}}" alt="design" class="w-full transform hover:bg-blue-600 transition duration-500 hover:-rotate-12 hover:scale-125">
                                    <h3 class="top-contain absolute top-[15px] right-[15px]">
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">Web
                                            Design</span>
                                    </h3>
                                    <div class="bottom-contain absolute bottom-4 left-4 right-4">
                                        <div class="overlay-info px-4 py-2 bg-black bg-opacity-60 rounded-xl grid grid-cols-2 gap-[30px] place-content-between">
                                            <a href="#" class="text-white text-sm flex items-center">Mila - Virtual
                                                Reality</a>
                                            <a href="assets/img/portfolio/img-3.jpg" data-fancybox="gallery" class="text-white text-sm grid justify-items-end">
                                                <p class="hidden">.</p>
                                                <span class="bg-[#7963e0] h-8 w-8 flex justify-center items-center rounded-md">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix development proyecto">
                                <div class="portfolio-img truncate rounded-2xl relative">
                                    <img src="{{asset('img/portfolio/work-4.jpg')}}" alt="development" class="w-full transform hover:bg-blue-600 transition duration-500 hover:-rotate-12 hover:scale-125">
                                    <h3 class="top-contain absolute top-[15px] right-[15px]">
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">Development</span>
                                    </h3>
                                    <div class="bottom-contain absolute bottom-4 left-4 right-4">
                                        <div class="overlay-info px-4 py-2 bg-black bg-opacity-60 rounded-xl grid grid-cols-2 gap-[30px] place-content-between">
                                            <a href="#" class="text-white text-sm flex items-center">Sen - Hotel
                                                Website</a>
                                            <a href="assets/img/portfolio/img-4.jpg" data-fancybox="gallery" class="text-white text-sm grid justify-items-end">
                                                <p class="hidden">.</p>
                                                <span class="bg-[#7963e0] h-8 w-8 flex justify-center items-center rounded-md">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix templates diseno proyecto">
                                <div class="portfolio-img truncate rounded-2xl relative">
                                    <img src="{{asset('img/portfolio/work-5.jpg')}}" alt="templates" class="w-full transform hover:bg-blue-600 transition duration-500 hover:-rotate-12 hover:scale-125">
                                    <h3 class="top-contain absolute top-[15px] right-[15px]">
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">Templates</span>
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">Web
                                            Design</span>
                                    </h3>
                                    <div class="bottom-contain absolute bottom-4 left-4 right-4">
                                        <div class="overlay-info px-4 py-2 bg-black bg-opacity-60 rounded-xl grid grid-cols-2 gap-[30px] place-content-between">
                                            <a href="#" class="text-white text-sm flex items-center">Ekka -
                                                eCommerce template</a>
                                            <a href="assets/img/portfolio/img-1.jpg" class="text-white text-sm grid justify-items-end">
                                                <p class="hidden">.</p>
                                                <span class="bg-[#7963e0] h-8 w-8 flex justify-center items-center rounded-md">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mix development graphics proyecto">
                                <div class="portfolio-img truncate rounded-2xl relative">
                                    <img src="{{asset('img/portfolio/work-5.jpg')}}" alt="development" class="w-full transform hover:bg-blue-600 transition duration-500 hover:-rotate-12 hover:scale-125">
                                    <h3 class="top-contain absolute top-[15px] right-[15px]">
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">Development</span>
                                        <span class="bg-black rounded-full font-normal text-white text-[12px] px-2 py-1">3D
                                            Graphics</span>
                                    </h3>
                                    <div class="bottom-contain absolute bottom-4 left-4 right-4">
                                        <div class="overlay-info px-4 py-2 bg-black bg-opacity-60 rounded-xl grid grid-cols-2 gap-[30px] place-content-between">
                                            <a href="#" class="text-white text-sm flex items-center">Bukki - Teck
                                                crafts</a>
                                            <a href="assets/img/portfolio/img-2.jpg" class="text-white text-sm grid justify-items-end">
                                                <p class="hidden">.</p>
                                                <span class="bg-[#7963e0] h-8 w-8 flex justify-center items-center rounded-md">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
