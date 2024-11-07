@extends('admin.dashboard.master')

@section('title', 'Edit Blog Post')

@section('content')
    <div class="container mt-5">
        <h1>Edit Blog Post</h1>
        <form id="editBlogForm" action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">body</label>
                <textarea id="body" name="body" class="form-control" rows="5" required>{{ old('body', $post->body) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="video_url" class="form-label">Video URL</label>
                <input type="text" id="video_url" name="video_url" class="form-control" value="{{ old('video_url', $post->video_url) }}" placeholder="Enter the Video URL">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select id="category_id" name="category_id" class="form-control" required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>




            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @if ($post->image)
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" width="100">
                @else
                    <span>No Image</span>
                @endif
            </div>
            <button type="submit" class="btn btn-success">Update Post</button>
        </form>
    </div>


@endsection
