@extends('admin.dashboard.master')

@section('title', 'Projects')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Blog Posts</h1>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Create New Blog Post Button -->
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Create New Blog Post</a>

        <!-- Blog Posts Table -->
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Image</th>
                <th>Video</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name ?? 'No Category' }}</td>



                    <td>{!! html_entity_decode($post->body) !!}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" width="100">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td>
                        @if ($post->video_url)
                            <a href="{{ $post->video_url }}" target="_blank">Watch Video</a>
                        @else
                            <span>No Video</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No blog posts available</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
