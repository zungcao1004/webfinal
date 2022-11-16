@extends('layouts.app')

@section('title')
<<<<<<< HEAD
    {{ $category->meta_title }}
@endsection

@section('meta_keyword')
    {{ $category->meta_keyword }}
@endsection


@section('meta_description')
    {{ $category->meta_description }}
@endsection

=======
    {{$category->meta_title}}
@endsection

@section('meta_keyword')
    {{$category->meta_keyword}}
@endsection

@section('meta_description')
    {{$category->meta_description}}
@endsection


>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
@section('content')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>
<<<<<<< HEAD
                <livewire:frontend.product.index :category="$category" />
=======

                <livewire:frontend.product.index :products="$products" :category="$category" />

>>>>>>> be5a8301880f2deef97ce645c6da40304d7f49bf
            </div>
        </div>
    </div>
@endsection
