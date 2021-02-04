<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://bootswatch.com/4/pulse/bootstrap.min.css"
            class="stylesheet">

        <title>LaraTIPS</title>

    </head>

    <body>
        <header>

            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            aria-hidden="true"
                            class="mr-2"
                            viewbox="0 0 24 24"
                            focusable="false">
                            <path
                                d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                            <circle cx="12" cy="13" r="4"></circle>
                        </svg>
                        <strong>LaraTIPS Album</strong>
                    </a>

                </div>
            </div>
        </header>

        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Album do LaraTIPS</h1>
                    <p class="lead text-muted">Site desenvolvido pra estudos</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Album</a>
                        <a href="#" class="btn btn-primary my-2">Postar imagem</a>
                    </p>
                </div>
            </section>
            <hr>

            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">

                        @foreach($albums as $album)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="bd-placeholder-img card-img-top" src="{{ $album->image_url }}"/>
                                <div class="card-body">
                                    <p class="card-text">{{ $album->description }}</p>
                                    <div class="d-flex justify-content-between align-items-center text-muted">

                                        <small class=" text-right">{{ date('d/m/Y - H:i:s') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>

        </main>
        <hr>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
                <p>Album example is © Bootstrap, but please download and customize it for yourself!</p>
                <p>New to Bootstrap?
                    <a href="https://getbootstrap.com/">Visit the homepage</a>
                    or read our
                    <a href="/docs/4.3/getting-started/introduction/">getting started guide</a>.</p>
            </div>
        </footer>

    </body>

</html>