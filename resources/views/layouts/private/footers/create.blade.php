@extends('layouts.apps')

@section('Content')
<div class="container">
    <br><br>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Footer Data</h1>
        <a href="{{ route('footers.index') }}" class="btn btn-secondary">Back</a>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form action="{{ route('footers.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="copyright">Copyright</label>
                    <input type="text" class="form-control" id="copyright" name="copyright">
                    @error('copyright')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="socialmedialink1">Social Media 1</label>
                    <input type="text" class="form-control" id="socialmedialink1" name="socialmedialink1">
                    @error('socialmedialink1')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="socialmedialink2">Social Media 2</label>
                    <input type="text" class="form-control" id="socialmedialink2" name="socialmedialink2">
                    @error('socialmedialink2')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="socialmedialink3">Social Media 3</label>
                    <input type="text" class="form-control" id="socialmedialink3" name="socialmedialink3">
                    @error('socialmedialink3')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pagelink1">Page Link 1</label>
                    <input type="text" class="form-control" id="pagelink1" name="pagelink1">
                    @error('pagelink1')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pagelink2">Page Link 2</label>
                    <input type="text" class="form-control" id="pagelink2" name="pagelink2">
                    @error('pagelink2')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pagelink3">Page Link 3</label>
                    <input type="text" class="form-control" id="pagelink3" name="pagelink3">
                    @error('pagelink3')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Footer</button>
            </form>
        </div>
    </div>
</div>
@endsection
