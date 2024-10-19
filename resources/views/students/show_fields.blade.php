<!-- Name Field -->
<div class="col-md-12">
    <p class="h2 text-center">ADMISSION FORM</p>
    <p class="h4">Student details</p>
    <div class="col-md-12">
        <div class="col-md-8">
            
            <div class="col-sm-12">
            <p>Name: {{ $student->name }}</p>
            <p>Gender: {{ $student->gender }}</p>
            <p>Roll No: {{ $student->roll_no }}</p>
            <p>Section: {{$student->section}}</p>
            <p>Date Of Birth: {{$student->doa}}</p>
            <p>Aadhar Number: {{$student->aadhar_no}}</p>
            <p>Ration Card Number: {{$student->ration_card_no}}</p>
            <p>Date of Admission: {{ $student->doa }}</p>
            <p>Phone: {{ $student->phone }}</p>
            <p>Religion: {{ $student->religion }}</p>
            <p>Cast: {{ $student->cast }}</p>
            <p>Moles : {{ $student->moles }} </p>
        </div>
        <div class="col-md-4">
            <img class="rounded w-150 h-150 object-fit-cover"
            src="{{  STUDENT_IMAGE_PATH . $student->photo }}"
            alt="{{ $student->name }}">
        </div>
    </div>
<p class="h4">Parents details</p>
    <div class="col-md-6">
        <p>Mother Name : {{ $student->mother_name }}</p>
        <p>Father Name : {{ $student->father_name }} </p>
        <p>Mother Occupation: {{ $student->mother_occupation }}</p>
        <p>Father Occupation: {{ $student->father_occupation }} </p>
        <p>Phone: {{$student->phone}}</p>
    </div>
    
<p class="h4">Adreess details</p>

<div class="col-md-6">
        <p>Address : {{ $student->address }}</p>
        <p>House : {{ $student->house_no }}</p>
        <p>Villagw : {{ $student->village }}</p>
        <p>Mandal : {{ $student->mandal }}</p>
        <p>City : {{ $student->city }}</p>
        <p>ZipCode: {{ $student->zipcode }}</p>
        
</div>
    
<p class="h4">Previous School details</p>

<div class="col-md-6">
        <p>Name : {{ $student->ps_name }}</p>
        <p>Registration Number : {{ $student->ps_registration_no }}</p>
        <p>Class : {{ $student->ps_class }}</p>
        <p>Completion Year : {{ $student->ps_completion_year }}</p>
        <p>Village : {{ $student->ps_village }}</p>
        <p>Mandal: {{ $student->ps_mandal }}</p>
        <p>City: {{ $student->ps_city }}</p>
        <p>ZipCode: {{ $student->ps_address_code }}</p>
</div>
    
</div>

