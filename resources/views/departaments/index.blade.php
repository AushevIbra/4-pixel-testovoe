<?php

use App\Http\Controllers\DepartamentController as Controller;

/**
 * @var \App\Models\Departament[] $departaments
 */
?>
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <span>Departaments</span>
                    <a href="{{route('departaments.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <tbody>
                    @foreach($departaments as $departament)
                        <tr>
                            <td>
                                @if($departament->logo)
                                    <img src="{{url('storage/' . $departament->logo)}}" class="img-fluid"
                                         width="100">
                                @endif  
                            </td>
                            <td>
                                <div class="font-weight-bold">{{$departament->name}}</div>
                                <div>{{$departament->description}}</div>
                            </td>
                            <td>
                                <div class="font-weight-bold">Users</div>
                                <div>
                                    @foreach($departament->users as $key => $user)
                                        {{($key + 1) . " " . $user->name }} <br/>
                                    @endforeach
                                </div>
                            </td>

                            <td>

                                <div class="d-flex">
                                    <a class="btn btn-secondary"
                                       href="{{route(Controller::ROUTE_EDIT, $departament->id)}}">Edit</a>

                                    <a class="btn btn-danger ml-1"
                                       href="{{route(Controller::ROUTE_DESTROY, $departament->id)}}"
                                       title="Удалить"
                                       aria-label="Удалить"
                                       data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="delete"
                                       data-redirect="{{route(Controller::ROUTE_INDEX)}}">Delete</a>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{$departaments->links()}}
            </div>
        </div>
    </div>
@endsection
