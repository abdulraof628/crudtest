@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <label for=""></label> Informations</div>
                <div class="card-body">
                
                @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}  
                        </div>
                    @endif
                    <div class="div float-right pb-3"><a href="{{Route('new')}}" class="btn btn-primary">Create Information</a></div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Country</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($information as $information)
                            <tr>
                                <th scope="row">{{$information->id}}</th>
                                <td>{{$information->name}}</td>
                                <td>{{$information->age}}</td>
                                <td>{{$information->country}}</td>
                                <td><a href="{{Route('edit',$information->id)}}" class="btn btn-primary pull-left"><i class="fa fa-edit"></i></a>
                                    <form action="{{Route('delete',$information->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            
        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
