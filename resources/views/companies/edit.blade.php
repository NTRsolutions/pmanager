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
                        <div class="col-12 col-md-9">
                            <form method="post" action="{{route('companies.update', [$company->id])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="put">
                                <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$company->name}}" placeholder="Company name" spellcheck="false" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Company description" spellcheck="true ">{{$company->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="sidebar-module">
                        <h4>Actions</h4>
                        <ol class="list-unstyled">
                            <li><a href="/companies/{{$company->id}}/edit">Edit</a></li>
                            <li><a href="#">Delete</a></li>
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