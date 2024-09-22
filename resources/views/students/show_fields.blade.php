<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $student->name }}</p>
</div>

<!-- Class Field -->
<div class="col-sm-12">
    {!! Form::label('class', 'Class:') !!}
    <p>{{ $student->class }}</p>
</div>

<!-- Section Field -->
<div class="col-sm-12">
    {!! Form::label('section', 'Section:') !!}
    <p>{{ $student->section }}</p>
</div>

<!-- Roll No Field -->
<div class="col-sm-12">
    {!! Form::label('roll_no', 'Roll No:') !!}
    <p>{{ $student->roll_no }}</p>
</div>

