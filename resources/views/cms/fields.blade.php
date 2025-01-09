<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Parent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent', 'Parent:') !!}
    {!! Form::text('parent', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::number('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Custom Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('custom_url', 'Custom Url:') !!}
    {!! Form::text('custom_url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Banner Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner_image', 'Banner Image:') !!}
    {!! Form::text('banner_image', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Banner Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner_title', 'Banner Title:') !!}
    {!! Form::text('banner_title', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Banner Tagline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner_tagline', 'Banner Tagline:') !!}
    {!! Form::text('banner_tagline', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Banner Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('banner_description', 'Banner Description:') !!}
    {!! Form::textarea('banner_description', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Gallery Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('gallery', 'Gallery:') !!}
    {!! Form::textarea('gallery', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Main Menu Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('main_menu', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('main_menu', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('main_menu', 'Main Menu', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Top Menu Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('top_menu', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('top_menu', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('top_menu', 'Top Menu', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Side Menu Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('side_menu', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('side_menu', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('side_menu', 'Side Menu', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Footer Menu Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('footer_menu', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('footer_menu', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('footer_menu', 'Footer Menu', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Publish Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('publish', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('publish', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('publish', 'Publish', ['class' => 'form-check-label']) !!}
    </div>
</div>