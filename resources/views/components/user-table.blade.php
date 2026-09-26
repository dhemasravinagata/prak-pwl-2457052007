@props(['users'])

<div class="card card-simple">
    <div class="card-body p-0">

        <table class="table table-bordered mb-0 align-middle">

            <thead>
                <tr>
                    <th width="70">ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>

            <tbody>

                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->nama ?? $user->name }}</td>
                        <td>{{ $user->nim ?? $user->npm }}</td>
                        <td>{{ $user->nama_kelas }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Belum ada data.
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>
</div>