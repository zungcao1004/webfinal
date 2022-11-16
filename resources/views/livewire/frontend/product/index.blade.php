<div>
   <div class="row">
        @forelse ($products as $productItem)
            <div class="col-md-3">
                <div class="product-card">
                    <div class="product-card-img">
                        @if ($productItem->quantity > 0)
                            <label class="stock bg-success">In Stock</label>
                        @else
                            <label class="stock bg-danger">Out of Stock</label>
                        @endif

                        @if ($productItem->productImages->count() > 0)
                            <img src="{{ asset($productItem->productImages[0]->image) }}" alt="{{ $productItem->name }}">
                        @endif
                    </div>
                    <div class="product-card-body">
                        <p class="product-brand">{{ $productItem->brand }}</p>
                        <h5 class="product-name">
                        <a href="">
                            {{ $productItem->name }}
                        </a>
                        </h5>
                        <div>
                            <span class="selling-price">${{ $productItem->price }}</span>
                            <span class="original-price">${{ $productItem->old_price }}</span>
                        </div>
                        <div class="mt-2">
                            <a href="" class="btn btn1">Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                            <a href="" class="btn btn1"> View </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-md-12">
                <h4>No Products Available for {{ $category->name }}</h4>
            </div>
        @endforelse
   </div>
</div>
