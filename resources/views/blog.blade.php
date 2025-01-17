@extends('layouts.master')

@section('content')
    <div class="mx-36 my-5">
        <div class="flex justify-between my-5">
            <h1 class="text-blue-600 text-2xl">Blogs</h1>
            <button><a href="{{ route('blogs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Create Blog</a></button>
        </div>
        <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead>
                <tr>
                    <th style="padding: 8px;">ID</th>
                    <th style="padding: 8px;">Title</th>
                    <th style="padding: 8px;">Description</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sn=1;
                @endphp

                @foreach ($blogs as $blog)
                <tr>
                    <td style="padding: 8px;">{{ $sn++ }}</td>
                    <td style="padding: 8px;">{{ $blog->title }}</td>
                    <td style="padding: 8px;">{{ $blog->description }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
    </div>
@endsection