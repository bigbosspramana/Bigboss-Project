<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvin Yuga Pramana Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/dashboard.css" type="text/css">

    <!-- Styles / Scripts -->
    @vite([
        'resources/js/app.js', 
        'resources/img/img1.png', 
        'resources/img/img-self2.jpg',
        'resources/img/img-self1.jpg',
        'resources/img/aset1.png',
        'resources/img/aset2.png',
        'resources/img/calends.jpg',
        'resources/img/devforge.jpg',
        'resources/img/gdsc.jpg',
        'resources/img/lk21.jpg',
        'resources/img/oweek.jpg',
        'resources/img/project1.png',
        'resources/img/project2.png',
        'resources/img/project3.png',
        'resources/img/project4.png',
        'resources/img/smart-mirror.jpg',
        'resources/img/topup-shop.jpg',
        'resources/css/dashboard.css',
        'resources/css/app.css',
        'resources/css/reset.css',])
</head>

<body>
    <div class="navbar">
        <div class="left">
            <h1>Bigboss</h1>
        </div>
        <div class="right">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#send-email">Contact Me</a></li>
            </ul>
            <div class="line"></div>
            <div class="cv">
                <!-- icon -->
                <p><a href="{{ asset('assets/AlvinYugaPramanaCV.pdf') }}" download="Alvin_Yuga_Pramana_CV.pdf">
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
                <a href="#about">About me <i class="fa-solid fa-share-from-square"></i></a>
            </div>
        </div>
    </div>

    <div class="bg-hub1"></div>

    <div class="about" id="about">
        <div class="content00">
            <div class="img">
                <div class="img-self"></div>
            </div>
            <div class="text1">
                <h3>About Me</h3>
                <h2>Who Am I</h2>
                <p>Hello, I'm Alvin Yuga Pramana! I enjoy playing games and love helping others with web and mobile app development projects. I have a strong interest and curiosity in game development, especially in creating engaging and innovative interactive experiences. Outside of my projects, I often spend time playing badminton or games with my friends. Let's connect and talk about the latest technologies, innovations in app development, and how we can create new ideas in the digital world.</p>
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

    <div class="skills" id="skills">
        <div class="content">
            <div class="desc-singkat">
                <div class="img">
                    <img src="{{ Vite::asset('resources/img/img1.png') }}" alt="">
                </div>
                <div class="text">
                    <h2 class="title">Skills</h2>
                    <h3 class="sub-title">Web Developer</h3>
                    <h3>I have expertise in web and mobile app development using the latest technologies. I’m skilled in HTML and CSS for creating responsive and visually appealing designs, and JavaScript for adding interactivity and dynamic features. On the backend, I have experience with PHP for efficient data management and database integration. For mobile apps, I use Dart for cross-platform development, ensuring smooth performance on both Android and iOS. This expertise allows me to contribute to various digital projects, from websites to mobile apps, while staying up-to-date with the latest technology trends to deliver innovative solutions.</h3>
                </div>
            </div>
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
                    <div class="skill3">
                        <div class="title">
                            <h3>UI/UX Design</h3>
                            <i class="fa-brands fa-figma"></i>
                        </div>
                        <progress value="70" max="100"></progress>
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
                    <div class="skill3">
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

    <div class="projects" id="projects">
        <h2>Projects</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ Vite::asset('resources/img/project1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>HTML and CSS Learning Project</h5>
                        <p>This project is my first learning experience with HTML and CSS.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/project2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Wisata Indonesia</h5>
                        <p>This project is a website that connects tourists with vendors.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/project3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BigbossTech</h5>
                        <p>This project is an assignment from the Web Programming course, where I was asked to create a website that explains about my company, with the design built using HTML, CSS, and Bootstrap 5.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/project4.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Photo Gallery</h5>
                        <p>This website is the result of my self-taught learning, where I created a photo gallery.</p>
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

        <div class="row row-cols-1 row-cols-md-2 g-4 project2">
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/calends.jpg') }}" class="card-img-top" alt="..." width="200px" height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Callends</h5>
                        <p class="card-text">This is a prototype of an app created in Figma, aimed at helping people who struggle with managing their finances, daily activities, and goals.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/topup-shop.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Game Top-Up Sales Website Wireframe</h5>
                        <p class="card-text">This is a wireframe/mockup for a web-based game top-up sales website, designed for easy navigation and efficient transactions.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/lk21.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Figma Prototype for LK21 Interface</h5>
                        <p class="card-text">This is a Figma prototype I created to make the LK21 interface look more attractive and user-friendly.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/smart-mirror.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Smart Mirror</h5>
                        <p class="card-text">This is a project to create a smart mirror that provides information, rates items, and offers outfit suggestions for the user.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-hub2"></div>

    <div class="experiences" id="experiences">
        <h2>Experiences</h2>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ Vite::asset('resources/img/gdsc.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Devfest'23</h5>
                        <p>An annual event organized by Google Developer Groups (GDG) in various cities around the world. This event is designed for the technology developer community, with a focus on learning, collaboration, and innovation.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/devforge.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Devforge'23</h5>
                        <p>An annual hackathon competition organized by the students of IMT (Informatics) at Universitas Ciputra Makassar.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/img/oweek.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Elysian (Oweek'24)</h5>
                        <p>An exciting annual event for welcoming new students, aimed at introducing them to the campus environment, academic culture, and fostering relationships with fellow students and faculty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-hub3"></div>

    <div class="send-email" id="send-email">
        <div class="img">
            <img src="{{ Vite::asset('resources/img/aset1.png') }}" alt="">
            <div class="desc">
                <div class="greeting">
                    <h3>If you have any questions, would like to discuss a project further, or are interested in collaborating, feel free to reach out to me. I’ll be happy to respond to your message as soon as possible. You can fill out the form below or contact me directly via email or social media.</h3>
                </div>
                <div class="folme">
                    <h3 class="title">Follow Me!</h3>
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
        <div class="email">
            @if (session()->has('success'))
            <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                    <div class="text-green-500" dark:text-gray-500>
                        <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-sm font-medium ml-3">Success!.</div>
                </div>
                <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
                <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
            @endif
            <form class="row" action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="title">
                    <i class="fa-solid fa-square-envelope"></i>
                    <h3 class="sub">Email</h3>
                </div>
                <div class="col-md-12">
                    <label for="validationServer01" class="form-label">Name</label>
                    <input type="text" class="form-control" id="validationServer01" name="name">
                    @error('name')
                    <span class="text-danger">{{ $message}}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="validationServer02" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationServer02" name="email">
                    @error('email')
                    <span class="text-red-500">{{ $message}}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="validationServer03" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="validationServer03" name="subject">
                    @error('subject')
                    <span class="text-red-500">{{ $message}}</span>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="validationServer04" class="form-label">Message</label>
                    <textarea class="form-control" id="validationServer04" name="message" rows="3"></textarea>
                    @error('message')
                    <span class="text-red-500">{{ $message}}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>