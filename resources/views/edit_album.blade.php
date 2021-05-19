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
        <main role="main" class="container">
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <form action="{{ route('edit-album',  ['id' => $album->id]) }}" method="post" enctype="multipart/form-data">
                                <fieldset>
                                    <legend>Editar post</legend>
                                    @csrf
                                    <div class="form-group">
                                        <label for="descID">Descrição da imagem</label>
                                        <textarea
                                            type="text"
                                            class="form-control"
                                            id="descID"
                                            name="description"
                                            placeholder="Descrição:"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </body>

</html>