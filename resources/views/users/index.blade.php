<?php

use App\Http\Controllers\UserController as Controller;

/**
 * @var \App\User[] $users
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Users</span>
                    <a href="{{route('users.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>

                                <a class="btn btn-secondary" href="{{route(Controller::ROUTE_EDIT, $user->id)}}">Edit</a>

                                <a class="btn btn-danger" href="{{route(Controller::ROUTE_DESTROY, $user->id)}}" title="Удалить"
                                   aria-label="Удалить"
                                   data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="delete"
                                   data-redirect="{{route(Controller::ROUTE_INDEX)}}">Delete</a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
