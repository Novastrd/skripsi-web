@extends('admin.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <form action="{{ route('petanis.update', $petani->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $petani->nama }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="username" class="form-control" id="username" name="username"
                        value="{{ $petani->username }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $petani->alamat }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="notelepon">No Telepon:</label>
                    <input type="text" class="form-control" id="notelepon" name="notelepon"
                        value="{{ $petani->notelepon }}" required>
                </div>

                <!-- Tambahkan input lain sesuai kebutuhan -->

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('petanis.index') }}" class="btn btn-secondary">Batal</a>
            </form>


        </div>
    </div>
    <!-- /Page Content -->

    </div>
@endsection
