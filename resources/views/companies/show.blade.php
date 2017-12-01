@extends('layouts.app')
@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">{{$company->name}}</h1>
        <p class="lead text-muted">{{$company->description}}</p>
        <p>
            <a href="#" class="btn btn-primary">Main call to actionFf</a>
            <a href="#" class="btn btn-secondary">Secondary action</a>
        </p>
    </div>
</section>

<div class="album text-muted">
    <div class="container">

        <div class="row">
            <div class="col-12 col-md-9 mb-5">
                <div class="row">
                    @foreach($company->projects as $project)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="https://i.imgur.com/ltmWANZ.png" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{$project->name}}</h4>
                                <p class="card-text">{{$project->description}}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="sidebar-module">
                    <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                        <li><a href="#" onclick="var result = confirm('Are you sure ou wish to delete this project?');
                                                 if(result){
                                                     event.preventDefault();
                                                     document.getElementById('delete-form').submit();
                                                 }"
                            >Delete</a></li>

                        <form id="delete-form" method="POST" action="{{route('companies.destroy', [$company->id])}}">
                            <input type="hidden" name="_method" value="delete">
                            {{csrf_field()}}
                        </form>

                        <li><a href="#">Add new user</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Users</h4>
                    <ol class="list-unstyled">
                        {{--@foreach()--}}
                            {{--<li><a href="#">March 2014</a></li>--}}
                        {{--@endforeach--}}
                    </ol>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection