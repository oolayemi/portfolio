<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio - Olayemi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="/css/main.bundle.css">
{{--    <link rel="stylesheet" href="public/css/fontawesome/css/font-awesome.css">--}}

    <script src="{{url('https://kit.fontawesome.com/4e5a72c756.js')}}"></script>

</head>
<body>

@if(\Carbon\Carbon::today() == '2020-09-01 00:00:00')
 <div id="myModal" class="modal is-active ">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title" style="text-align: center">It's Olayemi's birthday</p>
                <button class="delete" aria-label="close"></button>
            </header>
            <section class="modal-card-body">

                <div id="project-1-modal-carousel" class="carousel">
                    <figure class="image is-4by3 carousel-cell">
                        <img src="{{asset('img/tenor2.gif')}}" alt="">
                    </figure>
                </div>

                <div class="x_content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_content">
                                    <form action="{{route('birthday.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">First Name</label>
                                            <div class="col-md-9 col-sm-6">
                                                <input type="text" id="name" name="name" required="required" class="form-control ">
                                            </div>
                                        </div>

                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-4 col-sm-4 label-align" for="message">Birthday Message</label>
                                            <div class="col-md-9 col-sm-6">
                                                <textarea type="text" id="message" name="message" required="required" class="form-control "></textarea>
                                            </div>
                                        </div>

                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tags">
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Web</span>
                    </div>
                </div>

            </section>
            <footer class="modal-card-foot justify-content-center">
                <button class="button is-success">Cancel</button>
            </footer>
        </div>
    </div>
@endif




<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <div class="navbar-item is-hidden-desktop">
            <a href="https://github.com/oolayemi" class="icon is-large has-text-light">
                <i class="fab fa-2x fa-github"></i>
            </a>
        </div>
        <div class="navbar-item is-hidden-desktop">
            <a href="https://twitter.com/olayemiDev" class="icon is-large has-text-light">
                <i class="fab fa-2x fa-twitter"></i>
            </a>
        </div>
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item">
                <a href="https://github.com/oolayemi" class="icon is-large has-text-light">
                    <i class="fab fa-2x fa-github"></i>
                </a>
            </div>
            <div class="navbar-item">
                <a href="https://twitter.com/olayemiDev" class="icon is-large has-text-light">
                    <i class="fab fa-2x fa-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class="image is-128x128">
                        <img class="is-rounded" src="{{asset('img/picture.jpg')}}" alt="">
                    </figure>
                </div>
            </div>
            <div class="columns has-text-centered">
                <div class="column">
                    <h1 class="title is-1">
                        Olayemi Olaomo
                    </h1>
                    <h2 class="subtitle">
                        Android Dev, Java, PHP(Laravel), Flutter, VueJS
                    </h2>
                    <p>
                        <a href="{{asset('docs/visualcv.pdf')}}" class="icon has-text-light">
                            <i class="fas fa-file-word"></i> <strong>Resume</strong>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h1 class="title">About Me</h1>
        <hr />
        <p> A professional with a drive, vision, energy and a personality that will prove an asset to a company.
            Creative Web, Mobile Developer dedicated to learning, building and optimizing user-friendly mobile, web
            development software. To leverage technical, analytical and problem-solving skills to create dynamic, high speed
            website, apps fueling competitive advantage and revenue growth.
            I am also a contentious and dynamic person that is highly motivated and goal-oriented, a professional and enthusiast learner.
        </p>
    </div>
</section>
<section class="section">
    <div class="container">
        <h1 class="title">Experience</h1>
        <hr />
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="{{asset('img/codegear.jpg')}}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">CodeGear</p>
                        <p class="subtitle is-6">Title - <time datetime="2019-12">December 2019</time> - <time
                                datetime="2020-3">March 2020</time> </p>
                    </div>
                </div>
                <div class="content">
                    <p>A tutor class created by the Faculty of Engineering Students, University of Ibadan.</p>
                    <ul>
                        <li>Taught Basic Java.</li>
                        <li>Started work on a collective project.</li>
                        <li>Expose people to the importance of Software Development.</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">Java</span>
                        <span class="tag">Python</span>
                        <span class="tag">CodeGear</span>
                        <span class="tag">Tutor</span>
                        <span class="tag">Fundamentals </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-gap">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="{{asset('img/numberonegeeks.png')}}" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">NumberOne Geeks Studios</p>
                        <p class="subtitle is-6">Title - <time datetime="2018-1">August 2017</time> - <time
                                datetime="2017-9">January 2018</time></p>
                    </div>
                </div>
                <div class="content">
                    <p>Number One Geeks Hub is a creative media studio and I.C.T company that offers end to end services in Animation, Motion graphics and media content.</p>
                    <ul>
                        <li>Learning Web Development.</li>
                        <li>Working on real life projects.</li>
                        <li>Learning motion graphics.</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">Web Dev</span>
                        <span class="tag">HTML & CSS</span>
                        <span class="tag">PHP</span>
                        <span class="tag">Motion Graphics</span>
                        <span class="tag">Frontend</span>
                        <span class="tag">Backend</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h1 class="title">Projects</h1>
        <hr />
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-12">
                <div class="tile">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">Portfolio</p>
                            <figure class="image is-3by2">
                                <img class="modal-trigger" data-target="project-1-modal" src="{{asset('img/project-1-cover.png')}}" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">Wear A Mask</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-2-modal" src="{{asset('img/carousel/project-2-2.png')}}" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">NuTron</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-3-modal" src="{{asset('img/project-3-1.png')}}" alt="">
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-12">
                <div class="tile">
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">PlainNews</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-4-modal" src="{{asset('img/project-4-cover.png')}}" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">WeatherToday</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-5-modal" src="{{asset('img/todayweather-cover.png')}}" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">Project title</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-6-modal" src="{{asset('img/project-6-cover.png')}}" alt="">
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h1 class="title">Education / Training</h1>
        <hr />
        <div class="card">
            <div class="card-content">
                <div class="content">
                    <p class="title is-4">University of Ibadan</p>
                    <p class="subtitle is-6">Computer Science - <time datetime="2018-4">April 2018</time> - <time
                            datetime="2019-9">till date</time></p>
                </div>
                <div class="content">
                    Computer Science department, University of Ibadan.
                    The First and The Best University in Nigeria.
                    <ul>
                        <li>Awarded student of the week, Computer Science Department.</li>
                        <li>Currently in 300Level.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card card-gap">
            <div class="card-content">
                <div class="content">
                    <p class="title is-4">School Name</p>
                    <p class="subtitle is-6">Program/Course - <time datetime="2015-9">September 2014</time> - <time
                            datetime="2015-9">Sepemter 2015</time></p>
                </div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris.
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section">
    <div class="container">
        <h1 class="title">Contact</h1>
        <hr />
        <nav class="level">
            <div class="level-item has-text-centered">
                <div>
                    <a href="https://github.com/oolayemi"  target="_blank"  class="icon is-large">
                        <i class="fab fa-2x fa-github"></i>
                    </a>
                    <p class="heading"><a target="_blank" href="https://github.com/oolayemi">GitHub</a></p>
                </div>
            </div>

            {{--<div class="level-item has-text-centered">
                <div>
                    <a href="https://www.facebook.com/olayemi.olaomo" target="_blank" class="icon is-large">
                        <i class="fab fa-2x fa-facebook"></i>
                    </a>
                    <p class="heading"><a href="https://www.facebook.com/olayemi.olaomo" target="_blank" >Facebook</a></p>
                </div>
            </div>--}}

            <div class="level-item has-text-centered">
                <div>
                    <a href="https://twitter.com/OlayemiDev" class="icon is-large" target="_blank" >
                        <i class="fab fa-2x fa-twitter"></i>
                    </a>
                    <p class="heading"><a href="https://twitter.com/OlayemiDev" target="_blank" >Twitter</a></p>
                </div>
            </div>
        </nav>

        <nav class="level">
            <div class="level-item has-text-centered">
                <div>
                    <a href="https://www.linkedin.com/in/olayemi-olaomo-79abab183" class="icon is-large" target="_blank" >
                        <i class="fab fa-2x fa-linkedin-in"></i>
                    </a>
                    <p class="heading"><a href="https://www.linkedin.com/in/olayemi-olaomo-79abab183" target="_blank" >LinkedIn</a></p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <a href="mailto:olayemiolaomo5@gmail.com" class="icon is-large" target="_blank" >
                        <i class="fas fa-2x fa-envelope"></i>
                    </a>
                    <p class="heading"><a href="mailto:olayemiolaomo5@gmail.com" target="_blank" >Gmail</a></p>
                </div>
            </div>
                        {{--<div class="level-item has-text-centered">
                <div>
                    <a href="https://www.instagram.com/holayemmmy" target="_blank" class="icon is-large">
                        <i class="fab fa-2x fa-instagram"></i>
                    </a>
                    <p class="heading"><a href="https://www.instagram.com/holayemmmy" target="_blank" >Instagram</a></p>
                </div>
            </div>--}}
        </nav>
    </div>
</section>

<!-- Modals -->
<div id="project-1-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">My Portfolio</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">

            <div id="project-1-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-1-1.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-1-2.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-1-3.png')}}" alt="">
                </figure>
            </div>

            <div class="content">

                <p>A brief portfolio website about Myself.
                    I am a contentious and dynamic person that is highly motivated and goal-oriented, a professional and enthusiast learner.
                    <br>
                    The portfolio website shows experience, educational background, some of my projects and information on how to reach me on some of my social media presence.

                </p>

                <div class="tags">
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">JavaScript</span>
                    <span class="tag">PHP</span>
                    <span class="tag">Web</span>
                </div>

            </div>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Close</button>
        </footer>
    </div>
</div>

<div id="project-2-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Wear A Mask😷🤡</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">

            <div id="project-2-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-2-1.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-2-2.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-2-3.png')}}" alt="">
                </figure>
            </div>

            <div class="content">

                <p>
                    An App that was created for coronavirus awareness.
                    <br>
                    The apps works in two dimensions, first of which is a task schedule reminder that prompts you to go out with your face mask before leaving for the scheduled outing.
                    <br>
                    The second approach is the use of google maps with prompts you to take your face mask whenever you are 3miles away from your saved place of residence.
                </p>


                <div class="tags">
                    <span class="tag">Android</span>
                    <span class="tag">iOS</span>
                    <span class="tag">Flutter</span>
                    <span class="tag">Dart</span>
                    <span class="tag">Mobile</span>
                </div>

            </div>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Close</button>
        </footer>
    </div>
</div>

<div id="project-3-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">NuTron</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div id="project-3-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-3-1.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/2.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/1.png')}}" alt="">
                </figure>
            </div>

            <div class="content">
                <p>
                    One of two Patient-Doctor relationship app.
                    The second (patient's) part of a doctor-patient communication app that helps facilitate off-work checkups and follow-ups.
                    The apps leverages its functionality on an online database called <span class="tag">Firebase</span> The app is fully built with Java for Android devices only and with a online-database (Firebase).
                </p>
                <div class="tags">
                    <span class="tag">Android</span>
                    <span class="tag">Mobile</span>
                    <span class="tag">Firebase</span>
                    <span class="tag">Java</span>
                </div>
            </div>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Close</button>
        </footer>
    </div>
</div>

<div id="project-4-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">PlainNews</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div id="project-4-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-4-1.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-4-2.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/project-4-3.png')}}" alt="">
                </figure>
            </div>

            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat.</p>
                <div class="tags">
                    <span class="tag">angular</span>
                    <span class="tag">mongo</span>
                    <span class="tag">typscript</span>
                    <span class="tag">node</span>
                </div>
            </div>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Close</button>
        </footer>
    </div>
</div>

<div id="project-5-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">WeatherApp</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div id="project-5-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/todayweather-cover.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/todayweatherapp.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/todayweatherapp2.png')}}" alt="">
                </figure>
            </div>

            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat.</p>
                <div class="tags">
                    <span class="tag">angular</span>
                    <span class="tag">mongo</span>
                    <span class="tag">typscript</span>
                    <span class="tag">node</span>
                </div>
            </div>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Close</button>
        </footer>
    </div>
</div>

<div id="project-6-modal" class="modal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">Project title</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div id="project-6-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/1.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/2.png')}}" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="{{asset('img/carousel/3.png')}}" alt="">
                </figure>
            </div>

            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat.</p>
                <div class="tags">
                    <span class="tag">Java</span>
                    <span class="tag">PHP</span>
                    <span class="tag">Flutter</span>
                    <span class="tag">FullStack</span>
                </div>
            </div>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-success">Close</button>
        </footer>
    </div>
</div>

<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <a href="https://github.com/oolayemi" target="_blank" class="icon has-text-primary">
                <i class="fab fa-github"></i> <strong>Olayemi</strong></a>
        </p>
    </div>
</footer>

<script src="/js/bundle.js"></script>


</body>

</html>
