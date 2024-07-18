@extends('layouts.apps')

@section('Content')
<div class="container">
    <h1>Add Profile</h1>
    <form action="{{ route('profiles.store') }}" method="POST">
        @csrf

        <h2>Experience</h2>
        <div class="form-group">
            <label for="tahun_kerja">Tahun Kerja</label>
            <input type="text" class="form-control" id="tahun_kerja" name="tahun_kerja" required>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
        </div>
        <div class="form-group">
            <label for="perusahaan">Perusahaan</label>
            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
        </div>
        <div class="form-group">
            <label for="lokasi_perusahan">Lokasi Perusahaan</label>
            <input type="text" class="form-control" id="lokasi_perusahan" name="lokasi_perusahan" required>
        </div>
        <div class="form-group">
            <label for="deskripsi1">Deskripsi</label>
            <textarea class="form-control" id="deskripsi1" name="deskripsi1"></textarea>
        </div>

        <h2>Education</h2>
        <div class="form-group">
            <label for="tahun_masuk">Tahun Masuk</label>
            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk" required>
        </div>
        <div class="form-group">
            <label for="universitas">Universitas</label>
            <input type="text" class="form-control" id="universitas" name="universitas" required>
        </div>
        <div class="form-group">
            <label for="lokasi_univ">Lokasi Universitas</label>
            <input type="text" class="form-control" id="lokasi_univ" name="lokasi_univ" required>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
        </div>
        <div class="form-group">
            <label for="deskripsi2">Deskripsi</label>
            <textarea class="form-control" id="deskripsi2" name="deskripsi2"></textarea>
        </div>

        <h2>Hard Skills</h2>
        <div class="form-group">
            <label for="hard_skill_1">Skill 1</label>
            <input type="text" class="form-control" id="hard_skill_1" name="hard_skill_1">
        </div>
        <div class="form-group">
            <label for="hard_skill_2">Skill 2</label>
            <input type="text" class="form-control" id="hard_skill_2" name="hard_skill_2">
        </div>
        <div class="form-group">
            <label for="hard_skill_3">Skill 3</label>
            <input type="text" class="form-control" id="hard_skill_3" name="hard_skill_3">
        </div>

        <h2>Soft Skills</h2>
        <div class="form-group">
            <label for="soft_skill_1">Skill 1</label>
            <input type="text" class="form-control" id="soft_skill_1" name="soft_skill_1">
        </div>
        <div class="form-group">
            <label for="soft_skill_2">Skill 2</label>
            <input type="text" class="form-control" id="soft_skill_2" name="soft_skill_2">
        </div>
        <div class="form-group">
            <label for="soft_skill_3">Skill 3</label>
            <input type="text" class="form-control" id="soft_skill_3" name="soft_skill_3">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
