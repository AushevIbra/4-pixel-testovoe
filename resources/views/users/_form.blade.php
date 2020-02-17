<?php
/**
 * @var \App\User $model
 */
?>

@if ($errors->any())

    <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<div class="form-group">
    <input type="text" class="form-control" name="name" value="{{old('name', $model->name)}}" placeholder="Name">
</div>

<div class="form-group">
    <input type="text" class="form-control" name="email" value="{{old('email', $model->email)}}" placeholder="Email">
</div>

<div class="form-group">
    <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="Password">
</div>

