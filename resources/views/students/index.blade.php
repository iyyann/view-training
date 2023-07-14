<table>
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Course</th>
            <th>Year</th>
            <th>Contact Number</th>
            <th>Gender</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_number }}</td>
                <td>{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year }}</td>
                <td>{{ $student->contact_number }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
