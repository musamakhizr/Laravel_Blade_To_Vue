@extends('new_layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Ticket</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('ticket.store')}}">
                            @csrf

                            <div class="form-group row mb-4">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Your Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"  required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Your E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="category_id" class="col-md-4 col-form-label text-md-right">Ticket Category</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="category_id" name="category_id" >
                                        <option value="" selected>Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>  
                                        @endforeach
                                        
                                    </select>

                                    @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Ticket Description</label>

                                <div class="col-md-6">
                                    <textarea id="description" rows="5" class="form-control" name="description" required></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Ticket
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
