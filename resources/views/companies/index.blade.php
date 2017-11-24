@extends('layouts.app')
@section('content')
<div class="col-lg-6 col-lg-offset-3">
    <div class="card mt-3">
        <div class="card-header text-white bg-primary">
            List of Companies
        </div>
        <div class="card-block">
            <ul class="list-group">
                @foreach($companies as $company)
                <li class="list-group-item">
                    <span class="col-md-6">{{$company->name}}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
