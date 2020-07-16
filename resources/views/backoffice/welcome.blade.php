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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AboutCreate">
                        Créer
                    </button>

                    {{-- MODAL --}}
                    <div id="AboutCreate" class="modal" tabindex="-1" role="dialog">
                        <form method="post" action="/about" class="mb-1">
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
                                            <input type="text" placeholder="Text" value="" name="text"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Icon" value="" name="icon"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="text-center">
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
                            @foreach($about as $item)
                                <div class="col-md-4 col-sm-6 text-center">
                                    <div class="lab-card">
                                        <div style="height: 100px" class="icon">
                                            <i style="font-size: 60px" class=" {{ $item -> icon }}"></i>
                                        </div>
                                        <h2> {{ $item -> title }} </h2>
                                        <p> {{ $item -> text }} </p>
                                    </div>

                                    {{-- BTN --}}
                                    {{-- EDIT --}}
                                    <form method="post" action="/about/{{ $item->id }}" class="mb-1">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> title }}" name="title"
                                                class="form-control " id="" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="{{ $item -> text }}" name="text"
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
                                    <form method="post" action="/about/{{ $item->id }}">
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

    @stop
