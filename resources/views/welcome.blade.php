<!DOCTYPE html>
<html lang="en">

<head>
    <title>devfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="public/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="public/css/main.bundle.css">
{{--    <link rel="stylesheet" href="{{asset('css/app.css')}}">--}}


    <!-- Bootstrap -->
{{--    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">--}}



    <script src="{{url('https://kit.fontawesome.com/4e5a72c756.js')}}"></script>
</head>

<body>

@if(\Carbon\Carbon::today() == '2020-09-03 00:00:00')
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
                        <img src="public/img/tenor2.gif" alt="">
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
                        <img class="is-rounded" src="public/img/picture.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div class="columns has-text-centered">
                <div class="column">
                    <h1 class="title is-1">
                        Olayemi Olaomo
                    </h1>
                    <h2 class="subtitle">
                        Android Dev, Java, PHP(Laravel), Flutter.
                    </h2>
                    <p>
                        <a href="public/docs/resume.docs" class="icon has-text-light">
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
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.</p>
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
                            <img src="public/img/dunder-mifflin-logo.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Company Name</p>
                        <p class="subtitle is-6">Title - <time datetime="2018-1">January 2018</time> - <time
                                datetime="2019-9">Sepemter 2019</time> </p>
                    </div>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.</p>
                    <ul>
                        <li>Noteworthy achievment here.</li>
                        <li>Noteworthy achievment here.</li>
                        <li>Noteworthy achievment here.</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">c#</span>
                        <span class="tag">xamarin</span>
                        <span class="tag">asp.net core</span>
                        <span class="tag">.net core</span>
                        <span class="tag">azure</span>
                        <span class="tag">devops</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-gap">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="public/img/pied-piper-logo.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Company Name</p>
                        <p class="subtitle is-6">Title - <time datetime="2018-1">August 2017</time> - <time
                                datetime="2017-9">January 2018</time></p>
                    </div>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.</p>
                    <ul>
                        <li>Noteworthy achievment here.</li>
                        <li>Noteworthy achievment here.</li>
                        <li>Noteworthy achievment here.</li>
                    </ul>
                    <div class="tags">
                        <span class="tag">c#</span>
                        <span class="tag">xamarin</span>
                        <span class="tag">asp.net core</span>
                        <span class="tag">.net core</span>
                        <span class="tag">azure</span>
                        <span class="tag">devops</span>
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
                                <img class="modal-trigger" data-target="project-1-modal" src="public/img/project-1-cover.png" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">Wear A Mask</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-2-modal" src="public/img/carousel/project-2-2.png" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">NuTron</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-3-modal" src="public/img/project-3-1.png" alt="">
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
                                <img class="modal-trigger" data-target="project-4-modal" src="public/img/project-4-cover.png" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">Project title</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-5-modal" src="public/img/project-5-cover.png" alt="">
                            </figure>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <p class="title">Project title</p>
                            <figure class="image is-4by3">
                                <img class="modal-trigger" data-target="project-6-modal" src="public/img/project-6-cover.png" alt="">
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris.
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
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
                    <a href="https://github.com/oolayemi" class="icon is-large">
                        <i class="fab fa-2x fa-github"></i>
                    </a>
                    <p class="heading"><a href="https://github.com/oolayemi">GitHub</a></p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <a href="https://www.facebook.com/olayemi.olaomo" class="icon is-large">
                        <i class="fab fa-2x fa-facebook"></i>
                    </a>
                    <p class="heading"><a href="https://www.facebook.com/olayemi.olaomo">Facebook</a></p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <a href="https://twitter.com/OlayemiDev" class="icon is-large">
                        <i class="fab fa-2x fa-twitter"></i>
                    </a>
                    <p class="heading"><a href="https://twitter.com/OlayemiDev">Twitter</a></p>
                </div>
            </div>
        </nav>

        <nav class="level">
            <div class="level-item has-text-centered">
                <div>
                    <a href="mailto:olayemiolaomo5@gmail.com" class="icon is-large">
                        <i class="fas fa-2x fa-envelope"></i>
                    </a>
                    <p class="heading"><a href="mailto:olayemiolaomo5@gmail.com">Gmail</a></p>
                </div>
            </div>
            <div class="level-item has-text-centered">
                <div>
                    <a href="https://www.linkedin.com/in/olayemi-olaomo-79abab183" class="icon is-large">
                        <i class="fab fa-2x fa-linkedin-in"></i>
                    </a>
                    <p class="heading"><a href="https://www.linkedin.com/in/olayemi-olaomo-79abab183">LinkedIn</a></p>
                </div>
            </div>

            <div class="level-item has-text-centered">
                <div>
                    <a href="https://www.instagram.com/holayemmmy" class="icon is-large">
                        <i class="fab fa-2x fa-instagram"></i>
                    </a>
                    <p class="heading"><a href="https://www.instagram.com/holayemmmy">Instagram</a></p>
                </div>
            </div>
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
                    <img src="public/img/carousel/project-1-1.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-1-2.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-1-3.png" alt="">
                </figure>
            </div>

            <div class="content">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat.</p>

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
                    <img src="public/img/carousel/project-2-1.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-2-2.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-2-3.png" alt="">
                </figure>
            </div>

            <div class="content">

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo
                    consequat.</p>

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
                    <img src="public/img/carousel/1.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/2.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-3-1.png" alt="">
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
                    <img src="public/img/carousel/project-4-1.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-4-2.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/project-4-3.png" alt="">
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
            <p class="modal-card-title">Project title</p>
            <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div id="project-5-modal-carousel" class="carousel">
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/1.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/2.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/3.png" alt="">
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
                    <img src="public/img/carousel/1.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/2.png" alt="">
                </figure>
                <figure class="image is-4by3 carousel-cell">
                    <img src="public/img/carousel/3.png" alt="">
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
                    <span class="tag">Fullstack</span>
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
            <a href="https://github.com/mmacneil/devfolio" target="_blank" class="icon has-text-primary">
                <i class="fab fa-github"></i> <strong>devfolio</strong></a>
        </p>
    </div>
</footer>

<script src="public/js/bundle.js"></script>


</body>

</html>





{{--<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url({{asset('img/tenor.gif')}});
        min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("https://source.unsplash.com/QAB-WJcbgJk/400x400");
        min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("https://source.unsplash.com/QAB-WJcbgJk/400x400");
        min-height: 400px;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
    }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
            <i class="fa fa-search"></i>
        </a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
        <a href="#" class="w3-bar-item w3-button">SEARCH</a>
    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <a href="{{route('birthday.index')}}"><span class="w3-center w3-padding-large w3-white w3-xlarge w3-wide w3-animate-opacity">IT'S <span class="w3-hide-small">OLAYEMI'S</span> BIRTHDAY</span></a>
    </div>



</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT ME</h3>
    <p class="w3-center"><em>I love photography</em></p>
    <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
        qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
            <p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>
            <img src="/w3images/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
            <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
    <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">14+</span><br>
        Partners
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">MY WORK</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
    </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">WHERE I WORK</h3>
    <p class="w3-center"><em>I'd love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
            <img src="/w3images/map.jpg" class="w3-image w3-round" style="width:100%">
        </div>
        <div class="w3-col m8 w3-panel">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Chicago, US<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +00 151515<br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
            </div>
            <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <a href="https://www.facebook.com/olayemi.olaomo" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity "></i></a>
        <a href="https://www.instagram.com/holayemmmy/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
        <a href="https://github.com/oolayemi"><i class="fa fa-github w3-hover-opacity"></i></a>
        <a href="https://twitter.com/OlayemiDev"><i class="fa fa-twitter w3-hover-opacity"></i></a>
        <a href="https://www.linkedin.com/in/olayemi-olaomo-79abab183/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    </div>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>--}}




