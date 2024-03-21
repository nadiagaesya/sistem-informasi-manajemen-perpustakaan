<!-- real-time-visitor.blade.php (Livewire view) -->
<div>
    <h5>Data Pengunjung Terbaru</h5>
    <table class="table table-bordered" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <thead>
            <tr class="table-active" style="font-size:16px; font-weight:bold;">
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Telepon</th>
                <th>Instansi</th>
                <th>Keperluan</th>
                <th>Tanggal Berkunjung</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamu as $visitor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $visitor->nama_lengkap }}</td>
                    <td>{{ $visitor->telepon }}</td>
                    <td>{{ $visitor->instansi }}</td>
                    <td>{{ $visitor->keperluan }}</td>
                    <td>{{ $visitor->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                {{-- <li>{{ $visitor->nama_lengkap }} - {{ $visitor->instansi }}</li> --}}
            @endforeach
        </tbody>
    </table>
    {{-- <ul>
    </ul> --}}
</div>
