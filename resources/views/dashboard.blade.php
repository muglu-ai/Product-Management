@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')

    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Number of Products</h5>
                <p class="card-text">
                    <!-- Display the total number of products here -->
                    {{ $totalProducts }}
                </p>
            </div>

        </div>
    </div>
@endsection
