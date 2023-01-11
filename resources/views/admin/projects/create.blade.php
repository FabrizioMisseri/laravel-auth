@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-8 row mb-2">
                    <div class="col-2">
                        <label for="title">title</label>
                    </div>

                    <div class="col-10">
                        <input type="text" name="title">
                    </div>
                </div>

                <div class="col-8 row">
                    <div class="col-2">
                        <label for="description">description</label>
                    </div>

                    <div class="col-10">
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-5 justify-content-start">
                <div class="offset-2 col-1">
                    <button type="submit" class="btn btn-primary">
                        CREA
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
