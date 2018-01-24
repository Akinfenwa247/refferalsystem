@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                       <h2>Invite Your Friend</h2>
                    </div>

                    <form method="get" action="{{route('invite')}}">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="name" placeholder="Name"><br>
                        <input type="email" class="form-control" name="email" placeholder="Email"><br>
                        <button class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
