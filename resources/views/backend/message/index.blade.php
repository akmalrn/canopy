@extends('backend.layout')

@section('content')
    <div class="container">
        <h1>Data</h1>
        <div class="row">
            @foreach ($messages as $item)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text"><strong>Email:</strong> {{ $item->email }}</p>
                            <p class="card-text"><strong>Phone:</strong> {{ $item->phone_number }}</p>
                            <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('messages.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
