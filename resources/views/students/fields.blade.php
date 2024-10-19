<div class="col-md-12"> 
    <p class="rounded h2 text-center py-2 bg-secondary mt-1" >STUDENT DETAILS</p>
    <div class="row p-2">
        <!-- Name Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        <!-- Class Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('class', 'Class:') !!}
            {!! Form::text('class', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('section', 'Section:') !!}
            {!! Form::text('section', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        <!-- Roll No Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('roll_no', 'Roll No:') !!}
            {!! Form::text('roll_no', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('medium', 'Medium:') !!}
            {!! Form::text('medium', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('gender', 'Gender:') !!}
            {!! Form::text('gender', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('doa', 'Date Of Admission:') !!}
            {!! Form::date('doa', isset($student) ? formatDate($student->doa) : null, ['class' => 'form-control dateonlypicker','id'=>'doa']) !!}
        </div>

        <div class="form-group col-sm-4">
        {!! Form::label('adminssion_no', 'Adminssion Number:') !!}
            {!! Form::text('adminssion_no', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
        </div>

        @include('common.image.single-image', [
            'field_label' => 'Student Image:',
            'field_name' => 'photo',
            'data' => isset($student) ? $student->photo : null,
            'path' => STUDENT_IMAGE_PATH,
        ])
        <div class="clearfix"></div>
        <div class="form-group col-sm-4">
            {!! Form::label('dob', 'Date of Birth:') !!}
            {!! Form::date('dob', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('aadhar_no', 'Aadhar Number:') !!}
            {!! Form::text('aadhar_no', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('ration_card_no', 'Ration Card Number:') !!}
            {!! Form::text('ration_card_no', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
        <div class="form-group col-sm-4">
            {!! Form::label('religion', 'Religion:') !!}
            {!! Form::text('religion', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
        
        <div class="form-group col-sm-4">
            {!! Form::label('cast', 'Cast:') !!}
            {!! Form::text('cast', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
        
        
        <!-- address Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('address', 'Address:') !!}
            {!! Form::textarea('address', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

                <!-- Section Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('moles', 'Moles:') !!}
            {!! Form::textarea('moles', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
</div>
</div>

<div class="col-md-12"> 
    <p class="rounded h2 text-center py-2 bg-secondary mt-1" >PARENTS DETAILS</p>
    <div class="row p-2">
        <div class="form-group col-sm-4">
            {!! Form::label('mother_name', 'Mother Name:') !!}
            {!! Form::text('mother_name', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('father_name', 'Father Name:') !!}
            {!! Form::text('father_name', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('mother_occupation', 'Mother Occupation:') !!}
            {!! Form::text('mother_occupation', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('father_occupation', 'Father Occupation:') !!}
            {!! Form::text('father_occupation', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <div class="form-group col-sm-4">
            {!! Form::label('phone', 'Phone:') !!}
            {!! Form::text('phone', null, ['class' => 'form-control numbers-input', 'maxlength' => 10, 'minlength' => 10]) !!}
        </div>

    </div>
</div>
<div class="col-md-12"> 
    <p class="rounded h2 text-center py-2 bg-secondary mt-1" >ADDRESS DETAILS</p>
    <div class="row p-2">
        <!-- house_no Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('house_no', 'House Number:') !!}
            {!! Form::text('house_no', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- village Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('village', 'Village:') !!}
            {!! Form::text('village', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>


        <!-- mandal Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('mandal', 'Mandal:') !!}
            {!! Form::text('mandal', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('city', 'City:') !!}
            {!! Form::text('city', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('zipcode', 'Zipcode:') !!}
            {!! Form::text('zipcode', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
</div>

<div class="col-md-12"> 
    <p class="rounded h2 text-center py-2 bg-secondary mt-1" >PREVIOUS SCHOOL DETAILS</p>
    <div class="row p-2">
        <!-- ps_name Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_name', 'Previous School Name:') !!}
            {!! Form::text('ps_name', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_registration_no', 'Previous School Registration Number:') !!}
            {!! Form::text('ps_registration_no', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
         
        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_class', 'Previous School Class:') !!}
            {!! Form::text('ps_class', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_completion_year', 'Previous School Completion Year:') !!}
            {!! Form::text('ps_completion_year', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_village', 'Previous School Village:') !!}
            {!! Form::text('ps_village', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_mandal', 'Previous School Mandal:') !!}
            {!! Form::text('ps_mandal', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

        <!-- Section Field -->
        <div class="form-group col-sm-4">
            {!! Form::label('ps_city', 'Previous School City:') !!}
            {!! Form::text('ps_city', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>
        
        <div class="form-group col-sm-4">
            {!! Form::label('ps_address_code', 'Previous School Address Code:') !!}
            {!! Form::text('ps_address_code', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
        </div>

    </div>
</div>
