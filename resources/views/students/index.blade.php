<form action="/students" method="POST">
    @csrf
    <input name="firstname" placeholder="First Name"> 
    <input name="middlename" placeholder="Middle Name"> 
    <input name="lastname" placeholder="Last Name"> 
    <input name="contact_number" placeholder="Contact Number"> 
    <input name="course" placeholder="Course"> 
    <input name="year" placeholder="Year"> 
    <button type="submit">Save Student</button>
</form>

@foreach ($students as $student)
    {{$student->firstname}} 
    {{$student->lastname}} 
    {{$student->course}}
    {{$student->year}}
@endforeach