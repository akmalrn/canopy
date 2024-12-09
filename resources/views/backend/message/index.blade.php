@extends('backend.layout')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Data</h1>
        <div class="row">
            @foreach ($messages as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">
                                <strong>Email:</strong> {{ $item->email }}
                            </p>
                            <p class="card-text">
                                <strong>Phone:</strong> {{ $item->phone_number }}
                            </p>
                            <p class="card-text">
                                <strong>Description:</strong> {{ $item->description }}
                            </p>
                        </div>
                        <div class="card-footer bg-white border-top-0 d-flex justify-content-end">
                            <form action="{{ route('messages.destroy', $item->id) }}" method="POST" class="mb-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
