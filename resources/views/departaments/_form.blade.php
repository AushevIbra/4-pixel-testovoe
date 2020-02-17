<?php
/**
 * @var \App\Models\Departament $model
 */

$assignUsers = $model->users()->get()->keyBy('id');
$users       = \App\User::get();
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
    <input type="text" name="name" class="form-control" value="{{old('name', $model->name)}}">
</div>

<div class="form-group">
    <textarea type="text" name="description" class="form-control">{{old('name', $model->description)}}</textarea>
</div>


<div class="custom-file">
    <input name="logo" type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
</div>


<div>
    <span class="font-weight-bold">Users</span>

    <div>
        @foreach($users as $user)
            <div class="form-group">
                <input name="users[]" type="checkbox" value="{{$user->id}}" {{isset($assignUsers[$user->id]) ? 'checked' : ''}}>
                <label>{{$user->name}} <a href="mailto:{{$user->email}}">{{"(" . $user->email . ")"}}</a></label>
            </div>
        @endforeach

    </div>
</div>
