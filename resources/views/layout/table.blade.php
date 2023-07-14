@extends('layout.master')

@section('container')
    <table>
        <thead>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
        </thead>
        <tbody>
            @foreach($names as $name)
            <tr>
                <td>{{$name->fname}}</td>
                <td>{{$name->mname}}</td>
                <td>{{$name->lname}}</td>
                <td>
                    <form action="/edit" method="POST">
                        @csrf
                        <input hidden type="text" value="{{ $name->id}}" name="íd">
                        <button type="submit">Edit</button>
                    </form>

                         // handLe the credentials here
                        $studentsDetails = new students;
                        //$studentsDetai ls- >studentNO = $request->;
                        $studentsDetails ->studentNO = "20-020":
                        $studentsDetails - >fname = request->fname;
                        $studentsDetails - >mname = $request->mname;
                        $studentsDetails ->lname = $request->lname;
                        $studentsDetails ->date0fBirth = $request ->dateOFBirth;
                        $studentsDetails ->course = $request->course;
                        $studentsDetails ->year = $request->year;
                        $studentsDetails - >cpno = $request->cpno;
                        $studentsDetails - >gender = Šrequest->gender;
                        $studentsDetails - >email = $request->email;
                        $res = $studentsDetails - >save()

                    <form action="/delete" method="POST">
                        @csrf
                        <input hidden type="text" value="{{$name->id}}" name="íd">
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="bg-red-100 border-red-400 test-red-700 px-4 py-3 rounded relative" role="alert">
       <strong class="font-bold">Successfully Deleted!</strong>
       <span class="absolute top-0 buttom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http:www.w3.org/2000svg" viewBox="0 0 20 20"><title>close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697-1.697.12.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.18312.651-3.031a1.2 1.2 0 1 1 1.697 1.6971-2758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
       </span>
    </div>
@endsection