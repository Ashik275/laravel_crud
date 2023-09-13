@foreach ($sessions as $session)
    {{ $session->session_name }}
    @foreach ($session->students as $student)
        {{ $student->name }} <br>
    @endforeach
@endforeach