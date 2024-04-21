<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text mb-4">
                <h4>Keranjang Buku</h4>
                <hr>
            </div>
        </div>
    </div>

    @include('admin-lte/flash')

    <div class="container card p-4">

        <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-4">
                    <label for="tanggal_pinjam" style="font-weight: bold;">Tanggal Pinjam</label>
                    <a href="/riwayatkeranjang" style="float: right">Riwayat Pinjam</a>
                    <input wire:model="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam">
                    @error('tanggal_pinjam')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 mb-2">
                    @if ($keranjang->tanggal_pinjam)
                        <strong>Tanggal Pinjam :
                            {{ \Carbon\Carbon::create($keranjang->tanggal_pinjam)->format('d-m-Y') }}</strong>
                    @else
                        <button wire:click="pinjam({{ $keranjang->id }})" class="btn btn-sm btn-success mb-2">+ Usulkan
                            Peminjaman</button>
                    @endif
                    <strong class="float-end">Kode Pinjam : {{ $keranjang->kode_pinjam }}</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {{-- <table class="table table-responsive-lg table-bordered table-striped dataTable no-footer"
                        style="width: 100%;" id="datatables" aria-describedby="datatables_info">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center sorting sorting_asc" scope="col" tabindex="0"
                                    aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Barang: activate to sort column descending" style="width: 81.7px;">
                                    No</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" aria-label="Tujuan: activate to sort column ascending"
                                    style="width: 79.7px;">Judul</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1"
                                    aria-label="Ruangan: activate to sort column ascending" style="width: 97.7px;">
                                    Penulis</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1"
                                    aria-label="Waktu Pinjam: activate to sort column ascending"
                                    style="width: 147.7px;">Rak</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1"
                                    aria-label="Waktu Kembali: activate to sort column ascending"
                                    style="width: 159.7px;">Baris</th>
                                @if ($keranjang->tanggal_pinjam)
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Jaminan: activate to sort column ascending" style="width: 92.7px;">
                                        Tanggal Kembali</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Jaminan: activate to sort column ascending" style="width: 92.7px;">
                                        Denda</th>
                                @endif
                                @if (!$keranjang->tanggal_pinjam)
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending" style="width: 74.7px;">
                                    </th>
                                @endif
                                @if ($keranjang->denda > 0)
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Aksi: activate to sort column ascending" style="width: 54.7px;">
                                    </th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($keranjang->detail_peminjaman as $item)
                                <tr class="odd">
                                    <td valign="top" colspan="1" class="dataTables_empty">{{ $loop->iteration }}
                                    </td>
                                    <td valign="top" colspan="1" class="dataTables_empty">
                                        {{ $item->buku->judul }}
                                    </td>
                                    <td valign="top" colspan="1" class="dataTables_empty">
                                        {{ $item->buku->penulis }}
                                    </td>
                                    <td valign="top" colspan="1" class="dataTables_empty">
                                        {{ $item->buku->rak->rak }}
                                    </td>
                                    <td valign="top" colspan="1" class="dataTables_empty">
                                        {{ $item->buku->rak->baris }}
                                    </td>

                                    @if ($item->peminjaman->status == 3)
                                        <!-- Menampilkan tanggal kembali dan denda jika status peminjaman sudah sedang dipinjam (3) -->
                                        <td>{{ \Carbon\Carbon::create($item->peminjaman->tanggal_kembali)->format('d-m-Y') }}
                                        </td>
                                        <td>{{ $item->peminjaman->denda }}</td>
                                    @endif

                                    <td>
                                        @if (!$keranjang->tanggal_pinjam)
                                            <!-- Tombol hapus muncul jika status peminjaman adalah didalam keranjang (5) atau antrian pinjam (1) atau selesai dipinjam (4) -->
                                            @if ($item->peminjaman->status == 5 || $item->peminjaman->status == 1 || $item->peminjaman->status == 4 || $item->peminjaman->status == 0)
                                                <button wire:click="hapus({{ $keranjang->id }}, {{ $item->id }})"
                                                    class="btn btn-sm btn-danger">Hapus</button>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}

                    <table class="table table-responsive-lg table-bordered table-striped dataTable no-footer"
                        style="width: 100%;" id="datatables" aria-describedby="datatables_info">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center sorting sorting_asc" scope="col" tabindex="0"
                                    aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="Barang: activate to sort column descending" style="width: 81.7px;">No
                                </th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" aria-label="Tujuan: activate to sort column ascending"
                                    style="width: 79.7px;">Judul</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1"
                                    aria-label="Ruangan: activate to sort column ascending" style="width: 97.7px;">
                                    Penulis</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1"
                                    aria-label="Waktu Pinjam: activate to sort column ascending"
                                    style="width: 147.7px;">Rak</th>
                                <th class="text-center sorting" scope="col" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1"
                                    aria-label="Waktu Kembali: activate to sort column ascending"
                                    style="width: 159.7px;">Baris</th>
                                @if ($keranjang->tanggal_pinjam)
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Tanggal Kembali: activate to sort column ascending"
                                        style="width: 92.7px;">Tanggal Kembali</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Denda: activate to sort column ascending" style="width: 92.7px;">
                                        Denda</th>
                                @endif
                                @if (!$keranjang->tanggal_pinjam)
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending" style="width: 74.7px;">
                                    </th>
                                @endif
                                @if ($keranjang->denda > 0)
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Aksi: activate to sort column ascending" style="width: 54.7px;">
                                    </th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($keranjang->detail_peminjaman as $item)
                                <tr class="odd">
                                    <td valign="top" colspan="1">{{ $loop->iteration }}</td>
                                    <td valign="top" colspan="1">{{ $item->buku->judul }}</td>
                                    <td valign="top" colspan="1">{{ $item->buku->penulis }}</td>
                                    <td valign="top" colspan="1">{{ $item->buku->rak->rak }}</td>
                                    <td valign="top" colspan="1">{{ $item->buku->rak->baris }}</td>

                                    @if ($item->peminjaman->status == 3)
                                        <td>{{ \Carbon\Carbon::create($item->peminjaman->tanggal_kembali)->format('d-m-Y') }}
                                        </td>
                                        <td>{{ $item->peminjaman->denda }}</td>
                                    @endif

                                    <td>
                                        @if (!$keranjang->tanggal_pinjam)
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

                    <div class="row">
                        <div class="col-lg-6">
                            @if (!$keranjang->tanggal_pinjam)
                                @php
                                    $itemsToDelete = $keranjang->detail_peminjaman->where('peminjaman.status', '!=', 2);
                                @endphp
                                @if ($itemsToDelete->isNotEmpty())
                                    <!-- Tombol hapus muncul jika status peminjaman adalah didalam keranjang (5) atau antrian pinjam (1) atau selesai dipinjam (4) -->
                                    <button wire:click="hapusMasal" class="btn btn-sm btn-danger mb-3">Hapus
                                        Masal</button>
                                @endif
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <a href="/" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                {{ $keranjang->links() }}
            </div> --}}
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

    {{-- <div class="row">
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
    </div> --}}
</div>
