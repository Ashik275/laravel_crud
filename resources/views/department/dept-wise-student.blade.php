
{{$departments->dept_name}}  <br>  
@foreach ($departments->students as $student)
    {{$student->name}}<br>
@endforeach