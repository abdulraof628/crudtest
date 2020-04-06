@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Edit Information</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="POST" action="{{Route('update', $information->id)}}">
                    @method('PATCH')
                    @csrf
                        <div class="row form-group">
                            <div class="col-md-4 align-self-center">
                                <label for="">Name</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{ $information->age}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4 align-self-center">
                                <label for="">Age</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="age" class="form-control" value="{{ $information->name}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4 align-self-center">
                                <label for="">Country</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="country" class="form-control" value="{{ $information->country}}">
                            </div>
                        </div>
                        <div class="div float-right">
                            <a href="{{Route('home')}}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
