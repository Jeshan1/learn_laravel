@extends('layouts.master')

	@php
		$cards = [
			[
				"title"=>"Title first",
				"description"=>"This is description first",
				"image"=>"cards/card1.jpeg"
			],
			[
				"title"=>"Title second",
				"description"=>"This is description second",
				"image"=>"cards/card2.jpg"
			],
			[
				"title"=>"Tite third",
				"description"=>"This is description third",
				"image"=>"cards/card3.jpg"
			]
		];
	@endphp

@section('content')
<section class="dark:bg-gray-100 dark:text-gray-800 mx-24">
	<div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
		<div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
			<h1 class="text-5xl font-bold leading-none sm:text-6xl">Ac mattis
				<span class="dark:text-violet-600">senectus</span>erat pharetra
			</h1>
			<p class="mt-6 mb-8 text-lg sm:mb-12">Dictum aliquam porta in condimentum ac integer
				<br class="hidden md:inline lg:hidden">turpis pulvinar, est scelerisque ligula sem
			</p>
			<div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:bg-violet-600 dark:text-gray-50 bg-violet-600 text-white">Suspendisse</a>
				<a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-800">Malesuada</a>
			</div>
		</div>
		<div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
			<img src="{{ asset('cards/card1.jpeg') }}" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
		</div>
	</div>

	{{-- card section here  --}}

	<div class="grid grid-cols-3 gap-5 mx-5">

		@foreach ($cards as $card)
			<x-card :title="$card['title']" :description="$card['description']" :image="asset($card['image'])" />
		@endforeach
	</div>
</section>
@endsection