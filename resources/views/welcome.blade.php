<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvin Yuga Pramana</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="navbar">
        <div class="left">
            <h1>Bigboss</h1>
        </div>
        <div class="right">
            <ul>
                <!-- <li><a href="">About</a></li> -->
                <li><a href="">Skills</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Experience</a></li>
            </ul>
            <div class="line"></div>
            <div class="cv">
                <!-- icon -->
                <p><a href="">
                        <i class="fa-solid fa-file-pdf"></i>
                        Download CV
                    </a></p>
            </div>
        </div>
    </div>

    <div class="container1">
        <div class="bg-trans">
            <div class="text">
                <h2>Hello, <b>I'm Alvin<b><br>
                            <span>Welcome to my website portfolio</span></h2>
                <button id="">About me <i class="fa-solid fa-share-from-square"></i></button>
            </div>
        </div>
    </div>

    <div class="bg-hub1"></div>

    <div class="about">
        <div class="content00">
            <div class="img">
                <div class="img-self"></div>
            </div>
            <div class="text1">
                <h3>About Me</h3>
                <h2>Jelaskan secara singkat diriku</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa molestias soluta perspiciatis accusamus est possimus animi. Deleniti quisquam suscipit velit voluptatem cum libero laudantium dignissimos obcaecati quidem asperiores architecto alias aperiam hic fugit non ab, deserunt quae at autem nesciunt. Dolorem magnam cumque iure ipsa quidem dolores illum dolore, obcaecati, ratione sint voluptatibus omnis similique ut tempora neque nulla blanditiis. Accusantium quo consectetur provident minima explicabo eius tenetur aliquam ab laudantium. Consequatur officiis provident quos aspernatur sint nulla earum dignissimos placeat fugiat tempora illum dolorem nemo mollitia cupiditate dolor soluta voluptas fuga excepturi deleniti, iusto assumenda. Corporis, expedita. Quia?</p>
                <div class="sosmed">
                    <div class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="tiktok">
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                    <div class="line">
                        <i class="fa-brands fa-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skills">
        <div class="content">
            <h2 class="title">Skills</h2>
            <h3>Menguasai pengembangan web dan mobile menggunakan HTML, CSS, JavaScript, PHP, dan Dart. Terampil dalam menciptakan tampilan antarmuka responsif dengan HTML dan CSS, menambahkan interaktivitas menggunakan JavaScript, membangun backend dengan PHP, dan mengembangkan aplikasi mobile modern menggunakan Dart.</h3>
            <div class="skillss">
                <div class="sec1">
                    <div class="skill1">
                        <div class="title">
                            <h3>HTML5</h3>
                            <i class="fa-brands fa-html5"></i>
                        </div>
                        <progress value="80" max="100"></progress>
                    </div>
                    <div class="skill2">
                        <div class="title">
                            <h3>CSS3</h3>
                            <i class="fa-brands fa-css3-alt"></i>
                        </div>
                        <progress value="80" max="100"></progress>
                    </div>
                </div>
                <div class="sec2">
                    <div class="skill1">
                        <div class="title">
                            <h3>Dart</h3>
                            <i class="fa-brands fa-dart-lang"></i>
                        </div>
                        <progress value="40" max="100"></progress>
                    </div>
                    <div class="skill2">
                        <div class="title">
                            <h3>PHP</h3>
                            <i class="fa-brands fa-php"></i>
                        </div>
                        <progress value="40" max="100"></progress>
                    </div>
                </div>
                <div class="sec3">
                    <div class="skill1">
                        <div class="title">
                            <h3>UI/UX Design</h3>
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <progress value="70" max="100"></progress>
                    </div>
                    <div class="skill2">
                        <div class="title">
                            <h3>JavaScript</h3>
                            <i class="fa-brands fa-js"></i>
                        </div>
                        <progress value="50" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-hub2"></div>

    <div class="projects">
        <h2>Projects</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ Vite::asset('resources/img/project1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/project2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/project3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/project4.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/calends.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/topup-shop.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/lk21.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/smart-mirror.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>