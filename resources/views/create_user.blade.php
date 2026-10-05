@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="distro-card">
            <div class="distro-header d-flex align-items-center">
                <span class="terminal-btn btn-close-term"></span>
                <span class="terminal-btn btn-min-term"></span>
                <span class="terminal-btn btn-max-term"></span>
            </div>

            <div class="card-body p-4">
                <div class="mb-4">
                    <h5 class="fw-bold terminal-green mb-1">
                        Buat User Baru
                    </h5>
                    <p class="text-secondary small mb-0">
                        Masukkan data user baru ke dalam sistem. Pastikan semua Kolom diisi dengan benar sebelum menyimpan.
                    </p>
                </div>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label text-highlight">
                            Nama
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="nama"
                            name="nama"
                            value="{{ old('nama') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label text-highlight">
                            NPM
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            id="npm"
                            name="npm"
                            value="{{ old('npm') }}"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label text-highlight">
                            Kelas
                        </label>
                        <select class="form-select" id="kelas_id" name="kelas_id" required>
                            <option value="">-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option
                                    value="{{ $kelasItem->id }}"
                                    {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>
                                    {{ $kelasItem->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('user.index') }}" class="btn btn-secondary">
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-success">
                            Simpan User
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection