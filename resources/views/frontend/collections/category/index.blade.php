@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'All Categories')

@section('content')

=======
@section('title', 'Categories Page')

@section('content')
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Categories</h4>
                </div>
                @forelse ($categories as $categoryItem)
                    <div class="col-6 col-md-3">
                        <div class="category-card">
<<<<<<< HEAD
                            <a href="{{ url('/collections/' . $categoryItem->slug) }}">
=======
                            <a href="{{ url('/collections/'.$categoryItem->slug) }}">
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
                                <div class="category-card-img">
                                    <img src="{{ asset("$categoryItem->image") }}" class="w-100" alt="Laptop">
                                </div>
                                <div class="category-card-body">
<<<<<<< HEAD
                                    <h5>{{ $categoryItem->name }}</h5>
=======
                                    <h5>{{$categoryItem->name}}</h5>
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
<<<<<<< HEAD
                        <h5>No Category Available</h5>
                    </div>
                @endforelse


=======
                        <h5>No Categories Available</h5>
                    </div>
                @endforelse
>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
            </div>
        </div>
    </div>
@endsection
