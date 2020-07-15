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
                        <div class="row">
                            <div class="col-3">
                                {{ $NavTitre[0] -> title }}
                            </div>
                            <div class="col-3">
                                {{ $NavTitre[1] -> title }}
                            </div>
                            <div class="col-3">
                                {{ $NavTitre[2] -> title }}
                            </div>
                            <div class="col-3">
                                {{ $NavTitre[3] -> title }}
                            </div>
                        </div>
                        <hr>

                        {{-- CRUDS NAVBAR --}}
                        <div class="row dropdown">
                            <div class="col-3">
                                <form method="post" action="/navtitre/{{ $NavTitre[0]->id }}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <input type="text" value="{{ $NavTitre[0]->title }}" name="title"
                                            class="form-control " id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-3">
                                <form method="post" action="/navtitre/{{ $NavTitre[1]->id }}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <input type="text" value="{{ $NavTitre[1]->title }}" name="title"
                                            class="form-control " id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-3">
                                <form method="post" action="/navtitre/{{ $NavTitre[2]->id }}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <input type="text" value="{{ $NavTitre[2]->title }}" name="title"
                                            class="form-control " id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-3">
                                <form method="post" action="/navtitre/{{ $NavTitre[3]->id }}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <input type="text" value="{{ $NavTitre[3]->title }}" name="title"
                                            class="form-control " id="" aria-describedby="emailHelp">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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


        <div class="col-12">
            <div class="card">
                <div class="card-body text-center">
                    {{-- ABOUT -------------------- --}}
                    <p class="mb-2">-- ABOUT --</p>
                    <hr>
                    <div class="card-section">
                        <div class="container">
                            <div class="row">
                                <!-- single card -->
                                @foreach($about as $item)
                                    <div class="col-md-4 col-sm-6 text-center">
                                        <div class="lab-card">
                                            <div class="icon">
                                                <i style="font-size: 60px" class=" {{ $item -> icon }}"></i>
                                            </div>
                                            <h2> {{ $item -> title }} </h2>
                                            <p> {{ $item -> text }} </p>
                                        </div>

                                        {{-- BTN --}}
                                        <form method="post" action="/about/{{ $item->id }}">
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
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
