@extends('layouts.apps')

@section('Content')
<div class="container">
    <br><br>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Tambah data</h1>
        <a href="{{ route('profiles.create') }}" class="btn btn-primary">Add Profile</a>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Experience</th>
                <th>Education</th>
                <th>Hard Skills</th>
                <th>Soft Skills</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->pekerjaan }} at {{ $profile->perusahaan }}</td>
                <td>{{ $profile->universitas }}</td>
                <td>
                    {{ $profile->hard_skill_1 }}, {{ $profile->hard_skill_2 }}, {{ $profile->hard_skill_3 }}
                </td>
                <td>
                    {{ $profile->soft_skill_1 }}, {{ $profile->soft_skill_2 }}, {{ $profile->soft_skill_3 }}
                </td>
                <td>
                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h4 class="text-center my-4">Upload & Download File</h4>
            </div>
            <div class="card rounded">
                <div class="card-body">
                    <a href="{{ route('files.create') }}" class="btn btn-md btn-primary mb-3 float-end">Upload File</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama File</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection