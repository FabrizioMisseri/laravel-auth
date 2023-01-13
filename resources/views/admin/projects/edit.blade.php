@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.projects.update', $project->slug) }}" enctype="multipart/form-data" method="POST">
            @method('PUT')
            @csrf
            <div class="row justify-content-center">

                {{-- errors --}}
                @if ($errors->any())
                    <div class="col-8 row mb-3 mt-3 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- / errors --}}

                <div class="col-8 row mb-2 form-group">
                    <div class="col-2">
                        <label for="title">title</label>
                    </div>

                    <div class="col-10">
                        <input class="form-control" type="text" name="title"
                            value="{{ old('title', $project->title) }}">
                    </div>
                </div>

                <div class="col-8 row form-group">
                    <div class="col-2">
                        <label for="description">
                            description
                        </label>
                    </div>

                    <div class="col-10">
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $project->title) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- IMG --}}
            <div class="col-8 row form-group mt-2">
                <div class="col-2">
                    <label for="cover_image">image</label>
                </div>

                <div class="col-10">
                    <input type="file" name="cover_image" id="cover_image">
                </div>
            </div>
            {{-- / IMG --}}

            <div class="row mt-4 mb-5 justify-content-start">
                <div class="offset-2 col-1">
                    <button type="submit" class="btn btn-primary">
                        MODIFICA
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
