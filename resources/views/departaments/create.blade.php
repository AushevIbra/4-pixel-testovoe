@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Sections</div>
            <div class="card-body">

                <form action="{{route('departaments.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @component('departaments._form', ['model' => new \App\Models\Departament()])@endcomponent

                    <button class="btn btn-primary">Send</button>
                </form>

            </div>
        </div>
    </div>
@endsection
