@extends('layouts.home')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Tambah Peserta</h2>
                <a href="{{ route('participants.index') }}" class="btn btn-light px-4">
                    Back
                </a>
            </div>

            <form action="{{ route('participants.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" class="form-control" id="nisn">
                </div>
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="birth_date">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="form-control" id="birth_date">
                </div>
                <div class="mb-3">
                    <label for="birth_location">Tempat Lahir</label>
                    <input type="text" name="birth_location" class="form-control" id="birth_location">
                </div>
                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="form-control" id="address">
                </div>
                <div class="mb-3">
                    <label for="photo">Tempat Lahir</label>
                    <input type="file" accept="image/*" name="photo" class="form-control" id="photo">
                </div>

                <button class="btn btn-primary" type="submit">OKE SIMPAN</button>
            </form>
        </div>
    </section>
@endsection
