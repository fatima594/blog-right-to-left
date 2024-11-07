@extends('admin.dashboard.master')

@section('content')
    <h1>Category Details</h1>
    <p><strong>Name:</strong> {{ $category->name }}</p>


    <a href="{{ route('admin.category.index') }}" class="btn btn-secondary">Back to Categories</a>
@endsection
