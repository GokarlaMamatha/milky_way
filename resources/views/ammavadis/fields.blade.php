<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Mother Education Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_education', 'Mother Education:') !!}
    {!! Form::text('mother_education', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Mother Aadhar No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_aadhar_no', 'Mother Aadhar No:') !!}
    {!! Form::text('mother_aadhar_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Mother Phone No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_phone_no', 'Mother Phone No:') !!}
    {!! Form::text('mother_phone_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Mother Bank No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_bank_no', 'Mother Bank No:') !!}
    {!! Form::text('mother_bank_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Mother Bank Ifsc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_bank_ifsc', 'Mother Bank Ifsc:') !!}
    {!! Form::text('mother_bank_ifsc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Mother Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mother_bank_name', 'Mother Bank Name:') !!}
    {!! Form::text('mother_bank_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Education Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_education', 'Father Education:') !!}
    {!! Form::text('father_education', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Phone No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_phone_no', 'Father Phone No:') !!}
    {!! Form::text('father_phone_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Bank No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_bank_no', 'Father Bank No:') !!}
    {!! Form::text('father_bank_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Aadhar No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_aadhar_no', 'Father Aadhar No:') !!}
    {!! Form::text('father_aadhar_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_bank_name', 'Father Bank Name:') !!}
    {!! Form::text('father_bank_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Father Bank Ifsc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('father_bank_ifsc', 'Father Bank Ifsc:') !!}
    {!! Form::text('father_bank_ifsc', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Past Amavadi Cfms Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('past_amavadi_cfms_id', 'Past Amavadi Cfms Id:') !!}
    {!! Form::text('past_amavadi_cfms_id', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Past Amavadi Bank No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('past_amavadi_bank_no', 'Past Amavadi Bank No:') !!}
    {!! Form::text('past_amavadi_bank_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Past Amavadi Bank Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('past_amavadi_bank_name', 'Past Amavadi Bank Name:') !!}
    {!! Form::text('past_amavadi_bank_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Boots Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('boots_size', 'Boots Size:') !!}
    {!! Form::text('boots_size', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Android Phone Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('android_phone', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('android_phone', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('android_phone', 'Android Phone', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Basic Phone Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('basic_phone', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('basic_phone', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('basic_phone', 'Basic Phone', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Tv Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('tv', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('tv', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('tv', 'Tv', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Distance From House Field -->
<div class="form-group col-sm-6">
    {!! Form::label('distance_from_house', 'Distance From House:') !!}
    {!! Form::text('distance_from_house', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Whatsap No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('whatsap_no', 'Whatsap No:') !!}
    {!! Form::text('whatsap_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Village Volunteer Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('village_volunteer_name', 'Village Volunteer Name:') !!}
    {!! Form::text('village_volunteer_name', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Village Volunteer No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('village_volunteer_no', 'Village Volunteer No:') !!}
    {!! Form::text('village_volunteer_no', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Rashion Card Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('rashion_card', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('rashion_card', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('rashion_card', 'Rashion Card', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Aadhar Card Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('aadhar_card', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('aadhar_card', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('aadhar_card', 'Aadhar Card', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Cast Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('cast', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('cast', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('cast', 'Cast', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Dob Certificate Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('dob_certificate', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('dob_certificate', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('dob_certificate', 'Dob Certificate', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Mother Aadhar Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('mother_aadhar', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('mother_aadhar', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('mother_aadhar', 'Mother Aadhar', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Father Aadhar Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('father_aadhar', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('father_aadhar', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('father_aadhar', 'Father Aadhar', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Mother Bank Book Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('mother_bank_book', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('mother_bank_book', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('mother_bank_book', 'Mother Bank Book', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Other Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('other', 'Other:') !!}
    {!! Form::textarea('other', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>