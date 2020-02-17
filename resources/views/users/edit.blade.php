<?php

/**
 * @var \App\User $model
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Users</div>
            <div class="card-body">

                <form action="{{route('users.update', $model->id)}}" method="post">
                    @csrf
                    @method("PUT")
                    @component('users._form', ['model' => $model])@endcomponent

                    <button class="btn btn-primary">Send</button>
                </form>

            </div>
        </div>
    </div>
@endsection
