@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">

        <div class="flex-none">
            <img src="{{ $actor->profile_path }}" alt="parasite" class="w-64 lg:w-96">
            <ul class="flex items-center mt-4">

                @if ($social->facebook)
                    <li>
                        <a href="{{ $social->facebook }}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                    </li>
                @endif

                @if ($social->instagram)
                    <li class="ml-6">
                        <a href="{{ $social->instagram }}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </li>
                @endif

                @if ($social->twitter)
                    <li class="ml-6">
                        <a href="{{ $social->twitter }}" target="_blank" title="Twitter">
                            <i class="fab fa-twitter fa-2x"></i>
                        </a>
                    </li>
                @endif

                @if ($actor->homepage)
                    <li class="ml-6">
                        <a href="{{ $actor->homepage }}" target="_blank" title="Website">
                            <i class="fas fa-globe-americas fa-2x"></i>
                        </a>
                    </li>
                @endif

            </ul>
        </div>

        <div class="md:ml-24">

            <h2 class="text-4xl font-semibold">{{ $actor->name }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                <i class="fas fa-birthday-cake fa-lg fill-current text-orange-500 w-4"></i>
                <span class="ml-2">
                    {{ $actor->birthday }} ({{ $actor->age }} years old)
                    in {{ $actor->place_of_birth }}
                </span>
            </div>

            <p class="text-gray-300 mt-8">{{ $actor->biography }}</p>

            <h4 class="font-semibold mt-12">Known For</h4>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                @foreach ($knownForMovies as $movie)
                    <div class="mt-4">
                        <a href="{{ $movie->linkToPage }}">
                            <img src="{{ $movie->poster_path }}"
                                alt="">
                        </a>
                        <a href="{{ $movie->linkToPage }}" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">
                            {{ $movie->title }}
                        </a>
                    </div>
                @endforeach
            </div>

        </div>

    </div>
    </div>

    <div class="credits border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">

        <h2 class="text-4xl font-semibold">Credits</h2>

        <ul class="list-disc leading-loose pl-5 mt-8">
            @foreach ($credits as $credit)
                <li>
                    {{ $credit->release_year }} &middot;
                    <strong>
                        <a href="{{ $credit->linkToPage }}" class="hover:underline">
                            {{ $credit->title }}
                        </a>
                    </strong>
                     as {{ $credit->character }}
                 </li>
            @endforeach
        </ul>

    </div>
    </div>

@endsection
