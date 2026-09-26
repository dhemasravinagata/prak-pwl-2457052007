@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
    <div>
        <h4 class="fw-bold terminal-green mb-1">
            <i class="bi bi-hdd-network-fill me-2"></i>Daftar User
        </h4>
    </div>
</div>

{{-- Memanggil komponen dinamis tabel distro --}}
<x-user-table :users="$users" />
@endsection