<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
            <a class="navbar-brand mr-auto" href="#">PORTFOLIO YOUDEVS!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#porfolio">Portfolio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <header class="container-fluid">
            <div class="row" style="height: 680px; background-color:#5CBD9D;">
                <div class="col-12 align-self-center text-center">
                    <img src="{{asset('images/avatar.png')}}" class="img-fluid" width="200" alt="">
                    <h1>Bienvenido a YouDevs Portfolio</h1>
                    <hr>
                    <p> Desarrollador web - playboy y folántropo </p>
                </div>
            </div>
        </header>

        <section class="container" id="porfolio">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>PORTFOLIO</h2>
                    <hr>
                </div>
                <div class="col-4 text-center mt-5">
                    <h2>Primer Proyecto</h2>
                    <img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito bonito">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consectetur sit praesentium voluptatem corrupti.</p>
                </div>
                <div class="col-4 text-center mt-5">
                    <h2>Primer Proyecto</h2>
                    <img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito bonito">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consectetur sit praesentium voluptatem corrupti.</p>
                </div>
                <div class="col-4 text-center mt-5">
                    <h2>Primer Proyecto</h2>
                    <img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito bonito">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consectetur sit praesentium voluptatem corrupti.</p>
                </div>
                <div class="col-4 text-center mt-5">
                    <h2>Primer Proyecto</h2>
                    <img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito bonito">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consectetur sit praesentium voluptatem corrupti.</p>
                </div>
                <div class="col-4 text-center mt-5">
                    <h2>Primer Proyecto</h2>
                    <img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito bonito">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consectetur sit praesentium voluptatem corrupti.</p>
                </div>
                <div class="col-4 text-center mt-5">
                    <h2>Primer Proyecto</h2>
                    <img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito bonito">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat consectetur sit praesentium voluptatem corrupti.</p>
                </div>
            </div>
        </section>

        <section class="container-fluid" id="about">
            <div class="row justify-content-center py-5" style="background-color:#5CBD9D;">
                <div class="col-12 text-center mt-5 mb-4">
                    <h2>ABOUT</h2>
                    <hr>
                </div>
                <div class="col-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor soluta, nulla, voluptatum error quidem tempora ipsum doloribus qui aliquid facere consequatur saepe a officiis quia officia maxime itaque. Quisquam!</p>
                </div>
                <div class="col-4">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor soluta, nulla, voluptatum error quidem tempora ipsum doloribus qui aliquid facere consequatur saepe a officiis quia officia maxime itaque. Quisquam!</p>
                </div>
                <div class="col-12 text-center">
                    <button type="button" class="btn btn-outline-secondary">Free Download</button>
                </div>
            </div>
        </section>

        <section class="container" id="contact">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>CONTACT ME</h2>
                    <hr>
                </div>
                <div class="col-8">
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" id="msg" rows="3" placeholder="Like y chisme!"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary p-3">Send</button>
                      </form>
                </div>
        </section>

        <footer class="container-fluid">
            <div class="row justify-content-center pt-5">
                <div class="col-4 text-center pb-4">
                    <h3>LOCATION</h3>
                    <p>Guadalajara Guadalajara ! </p>
                </div>
                <div class="col-4 text-center pb-4">
                    <h3>AROUND THE WEB</h3>
                    <a href="">F</a>
                    <a href="">W</a>
                    <a href="">I</a>
                </div>
                <div class="col-4 text-center pb-4">
                    <h3>ABOUT FREELANCER</h3>
                    <p>FREELANCER ES PARA PERSONAS QUE NO LES GUSTA GANAR DINERO.
                        SE TENÍA QUE DECIR Y SE DIJO.
                    </p>
                </div>
                <div class="col-12 pt-3 text-center" style="background-color: #1A252F;">
                    <p>Ésta página y tu alma me pertenece PRRO!</p>
                </div>
            </div>
        </footer>

    </body>
</html>
