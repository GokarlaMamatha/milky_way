<!-- Product Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_category_id', 'Product Category Id:') !!}
    <p>{{ $products->product_category_id }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $products->product_name }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $products->image }}</p>
</div>

<!-- Decription Field -->
<div class="col-sm-12">
    {!! Form::label('decription', 'Decription:') !!}
    <p>{{ $products->decription }}</p>
</div>

<!-- Gallery Field -->
<div class="col-sm-12">
    {!! Form::label('gallery', 'Gallery:') !!}
    <p>{{ $products->gallery }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $products->price }}</p>
</div>

<!-- Publish Field -->
<div class="col-sm-12">
    {!! Form::label('publish', 'Publish:') !!}
    <p>{{ $products->publish }}</p>
</div>

