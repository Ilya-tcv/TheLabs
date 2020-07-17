@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">Dashboard</h1>
@stop

    @section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- NAVBAR ADMIN -------------------- --}}
                    <p class="mb-2">-- NAVBAR --</p>
                    <hr>
                    <div class="container">

                        {{-- CRUDS NAVBAR --}}
                        <div class="row">
                            @foreach($NavTitre as $item)
                                <div class="col-2 mx-3 mb-2">
                                    <form method="post" action="/navtitre/{{ $item->id }}">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <input type="text" value="{{ $item->title }}" name="title"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- CAROUSSEL -------------------- --}}
                    <p class="mb-2">-- CAROUSSEL --</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-4">1</div>
                            <div class="col-4"> 2</div>
                            <div class="col-4"> 3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- ABOUT -------------------- --}}
                    <p class="mb-2">-- ABOUT --</p>
                    <hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ServiceCreate">
                        Créer
                    </button>

                    {{-- MODAL --}}
                    <div id="ServiceCreate" class="modal" tabindex="-1" role="dialog">
                        <form method="post" action="/service" class="mb-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter une carte</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    {{-- BODY --}}
                                    <div class="modal-body">
                                        @csrf
                                        @method('post')

                                        <div class="form-group">
                                            <input type="text" placeholder="Titre" name="title" class="form-control "
                                                id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Description" value="" name="desc"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Icon" value="" name="icon"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>

                                        {{-- BOUTONS --}}
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- END MODAL --}}

                </div>
                <div class="card-section">
                    <div class="container">
                        <div class="row">
                            <!-- single card -->
                            @foreach($service as $item)
                                <div class="col-md-4 col-sm-6 text-center">
                                    <div class="lab-card">
                                        <div style="height: 100px" class="icon">
                                            <i style="font-size: 60px" class=" {{ $item -> icon }}"></i>
                                        </div>
                                        <h2> {{ $item -> title }} </h2>
                                        <p style="height: 100px"> {{ $item -> desc }} </p>
                                    </div>

                                    {{-- BTN --}}
                                    {{-- EDIT --}}
                                    <form method="post" action="/service/{{ $item->id }}" class="mb-1">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> title }}" name="title"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> desc }}" name="desc"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> icon }}" name="icon"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form>

                                    {{-- DELETE --}}
                                    <form method="post" action="/service/{{ $item->id }}">
                                        @csrf
                                        @method('delete')

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TITRES ---------------------------------------- --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- CAROUSSEL -------------------- --}}
                    <p class="mb-2">-- TITRES --</p>
                    <p style="font-size: small">Mettre entre ( ) pour afficher en vert</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            @foreach($title as $item)
                                <div class="col-4">
                                    {{-- EDIT --}}
                                    <form method="post" action="/title/{{ $item->id }}" class="mb-1">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> title }}" name="title"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- SECTION TEXT & BTN -------------------------------------- --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- ABOUT & BTN NAME -------------------- --}}
                    <p class="mb-2">-- SECTION ABOUT & BTN VIDEO --</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            @foreach($aboutSection as $item)
                                {{-- EDIT DESC 1 --}}
                                <div class="col-md-6">
                                    <p>Description 1</p>
                                    <p> {{ $item -> desc1 }} </p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#desc1">
                                        Modifier
                                    </button>
                                </div>

                                {{-- MODAL --}}
                                <div id="desc1" class="modal" tabindex="-1" role="dialog">
                                    <form method="post" action="/aboutSec/{{ $item->id }}" class="mb-1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modifier le texte</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                {{-- BODY --}}
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('put')

                                                    <div class="form-group">
                                                        <input type="text" value="{{ $item -> desc1 }}"
                                                            name="desc1" class="form-control " id=""
                                                            aria-describedby="emailHelp">
                                                    </div>

                                                    {{-- BOUTONS --}}
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- END MODAL --}}

                                {{-- EDIT DESC 2 --}}
                                <div class="col-md-6">
                                    <p>Description 2</p>
                                    <p> {{ $item -> desc2 }} </p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#desc2">
                                        Modifier
                                    </button>
                                </div>

                                {{-- MODAL --}}
                                <div id="desc2" class="modal" tabindex="-1" role="dialog">
                                    <form method="post" action="/aboutSec/{{ $item->id }}" class="mb-1">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modifier le texte</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                {{-- BODY --}}
                                                <div class="modal-body">
                                                    @csrf
                                                    @method('put')

                                                    <div class="form-group">
                                                        <input type="text" value="{{ $item -> desc2 }}"
                                                            name="desc2" class="form-control " id=""
                                                            aria-describedby="emailHelp">
                                                    </div>

                                                    {{-- BOUTONS --}}
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- END MODAL --}}


                                {{-- EDIT BTN --}}
                                <div class="col-12">
                                    <div class="text-center">
                                        <p>Nom du bouton</p>

                                        <form method="post" action="/aboutSec/{{ $item->id }}" class="mb-1">
                                            @csrf
                                            @method('put')
                                            <div class="d-flex justify-content-center">

                                                <div class="form-group col-3">
                                                    <input type="text" value="{{ $item -> btn }}" name="btn"
                                                        class="form-control " id="" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                            </div>
                                        </form>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- VIDEO ------------------- --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- CAROUSSEL -------------------- --}}
                    <p class="mb-2">-- VIDEO --</p>
                    <hr>
                    <div class="container">
                        <div class="row">
                            @foreach($video as $item)
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <p>Changer l'URL</p>
                                    {{-- EDIT --}}
                                    <form method="post" action="/video/{{ $item->id }}" class="mb-1">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> videolink }}" name="link"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>
                                <div class="col-3"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TESTIMONIAL CRUDS --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- ABOUT -------------------- --}}
                    <p class="mb-2">-- TESTIMONIALS --</p>
                    <hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TestiCreate">
                        Créer
                    </button>

                    {{-- MODAL --}}
                    <div id="TestiCreate" class="modal" tabindex="-1" role="dialog">
                        <form method="post" action="/testimonials" method="post" enctype="multipart/form-data"
                            class="mb-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter un avis</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    {{-- BODY --}}
                                    <div class="modal-body">
                                        @csrf
                                        {{-- @method('post') --}}

                                        <div class="form-group">
                                            <input type="text" placeholder="Nom" name="name" class="form-control " id=""
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Job" value="" name="job"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Description" value="" name="desc"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>

                                        {{-- STORAGE --}}
                                        <label for="inputFile">Upload</label>
                                        <input type="file" name="link" id="inputFile">

                                        {{-- BOUTONS --}}
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Créer</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- END MODAL --}}
                </div>

                <div class="card-section">
                    <div class="container">
                        <div class="row">
                            <!-- single card -->
                            @foreach($testimonial as $item)
                                <div class="col-md-4 col-sm-6 text-center">
                                    <div class="lab-card">
                                        <div style="height: 100px; max-content:100%" class="icon">
                                            <img style="height: 100px"
                                                src="{{ asset('storage/' . $item -> link) }}"
                                                alt="">
                                        </div>
                                        <h2> {{ $item -> name }} </h2>
                                        <p> {{ $item -> job }} </p>
                                        <p> {{ $item -> desc }} </p>
                                    </div>

                                    <!-- Button trigger modal -->
                                    {{-- BTN --}}
                                    {{-- EDIT --}}
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mb-1" data-toggle="modal"
                                            data-target="#editTesti{{ $item -> id }} ">
                                            Modifier</button>
                                    </div>

                                    {{-- DELETE --}}
                                    <form method="post" action="/testimonials/{{ $item -> id }}">
                                        @csrf
                                        @method('delete')

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>

                                {{-- MODAL EDIT --}}
                                <div id="editTesti{{ $item -> id }}" class="modal" tabindex="-1" role="dialog">
                                    <form action="/testimonials/{{ $item -> id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modifier le texte</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                {{-- BODY --}}
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ $item -> name }}" name="name"
                                                            class="form-control mb-1" id=""
                                                            aria-describedby="emailHelp">
                                                        <input type="text" value="{{ $item -> job }}" name="job"
                                                            class="form-control mb-1" id=""
                                                            aria-describedby="emailHelp">
                                                        <input type="text" value="{{ $item -> desc }}" name="desc"
                                                            class="form-control mb-1" id=""
                                                            aria-describedby="emailHelp">



                                                        {{-- STORAGE --}}
                                                        <label for="inputFile">Upload</label>
                                                        <input type="file" name="link" id="inputFile">
                                                    </div>

                                                    {{-- BOUTONS --}}
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- END MODAL --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TEAM -----------------------------------}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- ABOUT -------------------- --}}
                    <p class="mb-2">-- TEAM --</p>
                    <hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TeamCreate">
                        Créer
                    </button>

                    {{-- MODAL --}}
                    <div id="TeamCreate" class="modal" tabindex="-1" role="dialog">
                        <form method="post" action="/team" method="post" enctype="multipart/form-data"
                            class="mb-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ajouter un membre d'équipe</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    {{-- BODY --}}
                                    <div class="modal-body">
                                        @csrf
                                        {{-- @method('post') --}}

                                        <div class="form-group">
                                            <input type="text" placeholder="Nom" name="name" class="form-control " id=""
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Job" value="" name="job"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Description" value="" name="desc"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>

                                        {{-- STORAGE --}}
                                        <label for="inputFile">Upload</label>
                                        <input type="file" name="link" id="inputFile">

                                        {{-- BOUTONS --}}
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Créer</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- END MODAL --}}
                </div>
                
                <div class="card-section">
                    <div class="container">
                        <div class="row">
                            <!-- single card -->
                            @foreach($testimonial as $item)
                                <div class="col-md-4 col-sm-6 text-center">
                                    <div class="lab-card">
                                        <div style="height: 100px; max-content:100%" class="icon">
                                            <img style="height: 100px"
                                                src="{{ asset('storage/' . $item -> link) }}"
                                                alt="">
                                        </div>
                                        <h2> {{ $item -> name }} </h2>
                                        <p> {{ $item -> job }} </p>
                                        <p> {{ $item -> desc }} </p>
                                    </div>

                                    <!-- Button trigger modal -->
                                    {{-- BTN --}}
                                    {{-- EDIT --}}
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mb-1" data-toggle="modal"
                                            data-target="#editTesti{{ $item -> id }} ">
                                            Modifier</button>
                                    </div>

                                    {{-- DELETE --}}
                                    <form method="post" action="/testimonials/{{ $item -> id }}">
                                        @csrf
                                        @method('delete')

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                    <hr>
                                </div>

                                {{-- MODAL EDIT --}}
                                <div id="editTesti{{ $item -> id }}" class="modal" tabindex="-1" role="dialog">
                                    <form action="/testimonials/{{ $item -> id }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modifier le texte</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                {{-- BODY --}}
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ $item -> name }}" name="name"
                                                            class="form-control mb-1" id=""
                                                            aria-describedby="emailHelp">
                                                        <input type="text" value="{{ $item -> job }}" name="job"
                                                            class="form-control mb-1" id=""
                                                            aria-describedby="emailHelp">
                                                        <input type="text" value="{{ $item -> desc }}" name="desc"
                                                            class="form-control mb-1" id=""
                                                            aria-describedby="emailHelp">



                                                        {{-- STORAGE --}}
                                                        <label for="inputFile">Upload</label>
                                                        <input type="file" name="link" id="inputFile">
                                                    </div>

                                                    {{-- BOUTONS --}}
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- END MODAL --}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
