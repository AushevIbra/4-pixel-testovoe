@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">

                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @component('users._form', ['model' => new \App\User()])@endcomponent

                    <button class="btn btn-primary">Send</button>
                </form>

            </div>
        </div>
    </div>
@endsection
