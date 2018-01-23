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
                       <h4>Invite Your Friend</h4>
                    </div>

                    <form method="post" action="{{route('invite')}}">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                        <button>Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
