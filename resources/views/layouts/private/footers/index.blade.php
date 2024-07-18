@extends('layouts.apps')

@section('Content')
<div class="container">
    <br><br>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Footer Data</h1>
        <a href="{{ route('footers.create') }}" class="btn btn-primary">Add Footer Data</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Copyright</th>
                <th>Social Media</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($footers as $footer)
            <tr>
                <td>{{ $footer->id }}</td>
                <td>{{ $footer->copyright }}</td>
                <td>
                    @if ($footer->socialmedialink1)
                    <a href="{{ $footer->socialmedialink1 }}" target="_blank">{{ $footer->socialmedialink1 }}</a>,
                    @endif
                    @if ($footer->socialmedialink2)
                    <a href="{{ $footer->socialmedialink2 }}" target="_blank">{{ $footer->socialmedialink2 }}</a>,
                    @endif
                    @if ($footer->socialmedialink3)
                    <a href="{{ $footer->socialmedialink3 }}" target="_blank">{{ $footer->socialmedialink3 }}</a>
                    @endif
                </td>
                <td>
                    @if ($footer->pagelink1)
                    <a href="{{ $footer->pagelink1 }}" target="_blank">Privacy</a>,
                    @endif
                    @if ($footer->pagelink2)
                    <a href="{{ $footer->pagelink2 }}" target="_blank">Terms</a>,
                    @endif
                    @if ($footer->pagelink3)
                    <a href="{{ $footer->pagelink3 }}" target="_blank">Contact</a>
                    @endif
                </td>
                <td>
                    <a href="{{ route('footers.edit', $footer->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('footers.destroy', $footer->id) }}" method="POST" style="display:inline;">
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
@endsection
