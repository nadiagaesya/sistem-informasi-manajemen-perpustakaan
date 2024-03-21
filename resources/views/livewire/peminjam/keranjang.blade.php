<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="text" style="font-weight:bold; font-size:18px;">
                <p>Keranjang Buku</p>
            </div>
        </div>
    </div>

    @include('admin-lte/flash')

    <div class="row">
        <div class="col-md-12 mb-4">
            <label for="tanggal_pinjam">Tanggal Pinjam</label>
            <input wire:model="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam">
            @error('tanggal_pinjam')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            @if ($keranjang->tanggal_pinjam)
                <strong>Tanggal Pinjam :
                    {{ \Carbon\Carbon::create($keranjang->tanggal_pinjam)->format('d-m-Y') }}</strong>
            @else
                <button wire:click="pinjam({{ $keranjang->id }})" class="btn btn-sm btn-primary">Pinjam</button>
            @endif
            <strong class="float-end">Kode Pinjam : {{ $keranjang->kode_pinjam }}</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover text-nowrap mt-3 mb-4"
                style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;
                            overflow: hidden;">
                <thead>
                    <tr class="table-primary">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Rak</th>
                        <th>Baris</th>
                        {{-- <th>Aksi</th> --}}
                        @if ($keranjang->tanggal_pinjam)
                            <th>Tanggal Kembali</th>
                            <th>Denda</th>
                        @endif
                        @if (!$keranjang->tanggal_pinjam)
                            <th></th>
                        @endif
                        @if ($keranjang->denda > 0)
                            <th></th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang->detail_peminjaman as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->buku->judul }}</td>
                            <td>{{ $item->buku->penulis }}</td>
                            <td>{{ $item->buku->rak->rak }}</td>
                            <td>{{ $item->buku->rak->baris }}</td>
                            {{-- <td>
                                <!-- Tombol perpanjangan dan kembalikan hanya muncul ketika ada denda dan status selesai dipinjam (4) -->
                                @if ($item->peminjaman->status == 4 || $item->peminjaman->denda > 0)
                                    <button wire:click="perpanjang({{ $keranjang->id }}, {{ $item->id }})"
                                        class="btn btn-sm btn-warning" id="btnPerpanjang">Perpanjang</button>
                                    <button wire:click="kembalikan({{ $keranjang->id }}, {{ $item->id }})"
                                        class="btn btn-sm btn-primary">Kembalikan</button>
                                @endif
                            </td> --}}
                            @if ($item->peminjaman->status == 3)
                                <!-- Menampilkan tanggal kembali dan denda jika status peminjaman sudah sedang dipinjam (3) -->
                                <td>{{ \Carbon\Carbon::create($item->peminjaman->tanggal_kembali)->format('d-m-Y') }}
                                </td>
                                <td>{{ $item->peminjaman->denda }}</td>
                            @endif
                            <td>
                                @if (!$keranjang->tanggal_pinjam)
                                    <!-- Tombol hapus muncul jika status peminjaman adalah didalam keranjang (5) atau antrian pinjam (1) atau selesai dipinjam (4) -->
                                    @if (
                                        $item->peminjaman->status == 5 ||
                                            $item->peminjaman->status == 1 ||
                                            $item->peminjaman->status == 4 ||
                                            $item->peminjaman->status == 0)
                                        <button wire:click="hapus({{ $keranjang->id }}, {{ $item->id }})"
                                            class="btn btn-sm btn-danger">Hapus</button>
                                    @endif
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if (!$keranjang->tanggal_pinjam)
                @foreach ($keranjang->detail_peminjaman as $item)
                    @if (
                        $item->peminjaman->status == 5 ||
                            $item->peminjaman->status == 1 ||
                            $item->peminjaman->status == 4 ||
                            $item->peminjaman->status == 0)
                        <!-- Tombol hapus muncul jika status peminjaman adalah didalam keranjang (5) atau antrian pinjam (1) atau selesai dipinjam (4) -->
                        <button wire:click="hapusMasal" class="btn btn-sm btn-danger">Hapus Masal</button>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-2">
            @if ($keranjang->tanggal_pengembalian && $keranjang->status == 4)
                <strong class="float-end">Tanggal Pengembalian :
                    {{ \Carbon\Carbon::create($keranjang->tanggal_pengembalian)->format('d-m-Y') }}</strong>
                <strong class="float-start">Selesai Dipinjam</strong>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="/" class="btn btn-primary mt-5" style="float: right;">Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="text" style="margin-top:50px; font-weight:bold; font-size:18px;">
                <p>Riwayat Peminjaman</p>
            </div>
            <table class="table table-hover text-nowrap mt-4"
                style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;
                            overflow: hidden;">
                <thead>
                    <tr class="table-primary">
                        <th>No</th>
                        <th>Kode Pinjam</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Status</th>
                        <th>Denda</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayatPeminjaman as $peminjaman)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $peminjaman->kode_pinjam }}</td>
                            <td>
                                <ul>
                                    @foreach ($peminjaman->detail_peminjaman as $detailPeminjaman)
                                        <li>{{ $detailPeminjaman->buku->judul }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach ($peminjaman->detail_peminjaman as $detailPeminjaman)
                                        <li>{{ $detailPeminjaman->buku->penulis }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @if ($peminjaman->status == 4)
                                    Selesai Dipinjam
                                @endif
                            </td>
                            <td>{{ $peminjaman->denda }}</td>
                            <td>{{ $peminjaman->tanggal_pinjam }}</td>
                            <td>{{ $peminjaman->tanggal_pengembalian }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- <script>
    // Di bagian JavaScript Anda dapat menambahkan script berikut untuk menonaktifkan tombol perpanjang jika tanggal pinjam belum diisi
    document.addEventListener('livewire:load', function() {
        Livewire.hook('message.processed', (message, component) => {
            // Periksa apakah tanggal pinjam sudah diisi
            if (!component.get('keranjang.tanggal_pinjam')) {
                // Nonaktifkan tombol perpanjangan jika tanggal pinjam belum diisi
                document.getElementById('btnPerpanjang').disabled = true;
            } else {
                // Aktifkan tombol perpanjangan jika tanggal pinjam sudah diisi
                document.getElementById('btnPerpanjang').disabled = false;
            }
        });
    });
</script> --}}
