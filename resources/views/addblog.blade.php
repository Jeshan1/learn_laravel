@extends('layouts.master')


@section('content')
<div class="w-[80%] bg-white rounded-lg shadow-md p-6 mx-36 mt-10 mb-5">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Create New Blog</h1>
    <form action="{{ route('blogs.store') }}" method="POST" class="my-5">
        @csrf
      <!-- Title Field -->
      <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input 
          type="text" 
          id="title" 
          name="title" 
          placeholder="Enter title"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
          required
        />
        @error('title')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
      </div>

      <!-- Description Field -->
      <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea 
          id="description" 
          name="description" 
          placeholder="Enter description"
          rows="4"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
          required
        ></textarea>
        @error('description')
            <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
      </div>

      <!-- Submit Button -->
      <div class="text-right">
        <button 
          type="submit"
          class="px-4 py-2 bg-blue-600 text-white font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
@endsection