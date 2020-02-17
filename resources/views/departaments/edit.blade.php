<?php

/**
 * @var \App\Models\Departament $model
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <form action="{{route('departaments.update', $model->id)}}" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">Sections</div>
                <div class="card-body">


                    @csrf
                    @method("PUT")
                    @component('departaments._form', ['model' => $model])@endcomponent


                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Send</button>
                </div>
            </div>


        </form>

    </div>
@endsection
