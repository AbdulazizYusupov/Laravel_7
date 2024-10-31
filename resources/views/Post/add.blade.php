@extends('Layouts.main')

@section('title', 'Post')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Create</h1>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-6 mt-2">
                        <a href="/post" class="btn btn-primary">Post</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <form action="/post" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    @error('title')
                                        <spam class="text-danger">
                                            {{ $message }}
                                        </spam>
                                    @enderror
                                    <input type="text" class="form-control" name="title" placeholder="Enter title"><br>
                                    @error('body')
                                        <spam class="text-danger">
                                            {{ $message }}
                                        </spam>
                                    @enderror
                                    <textarea name="body" cols="30" rows="10"></textarea><br>
                                    @error('category_id')
                                        <spam class="text-danger">
                                            {{ $message }}
                                        </spam>
                                    @enderror
                                    <select class="form-select" aria-label="Default select example" name="category_id">
                                        @foreach ($models as $model)
                                            <option value="{{ $model->id }}">{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
