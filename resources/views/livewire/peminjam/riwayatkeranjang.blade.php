<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="text" style="font-weight:bold; font-size:18px;">
                <p>Riwayat Peminjaman</p>
            </div>
        </div>

        @include('admin-lte/flash')

        <div class="container card p-4">
            {{-- <ol class="breadcrumb col-lg-12 p-1" style="background-color: #e9ecef;">


                <li class="breadcrumb-item"><a class="breadcrumb-item fw-bold" href="/keranjang">Daftar Pinjam</a></li>

                <span class="px-2">|</span>
                <li class="breadcrumb-item"><a class="breadcrumb-item active fw-bold text-dark" href="/riwayatkeranjang">Riwayat Pinjam</a>
                </li>
            </ol> --}}

            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-responsive-lg table-bordered table-striped dataTable no-footer"
                            style="width: 100%;" id="datatables" aria-describedby="datatables_info">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center sorting sorting_asc" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending"
                                        aria-label="Barang: activate to sort column descending" style="width: 81.7px;">
                                        No</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Tujuan: activate to sort column ascending" style="width: 79.7px;">
                                        Kode Pinjam</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Ruangan: activate to sort column ascending" style="width: 97.7px;">
                                        Judul</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Waktu Pinjam: activate to sort column ascending"
                                        style="width: 147.7px;">Penulis</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Waktu Kembali: activate to sort column ascending"
                                        style="width: 159.7px;">Status</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Jaminan: activate to sort column ascending" style="width: 92.7px;">
                                        Denda</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Jaminan: activate to sort column ascending" style="width: 92.7px;">
                                        Tanggal Pinjam</th>
                                    <th class="text-center sorting" scope="col" tabindex="0"
                                        aria-controls="datatables" rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending" style="width: 74.7px;">
                                        Tanggal Pengembalian
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $total_buku = 0; // Inisialisasi jumlah buku total
                                @endphp

                                @foreach ($peminjamans as $index => $peminjaman)
                                    <tr class="odd">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $peminjaman->kode_pinjam }}</td>
                                        <td class="text-center">
                                            <ul>
                                                @foreach ($peminjaman->detail_peminjaman as $detailPeminjaman)
                                                    <li>{{ $detailPeminjaman->buku->judul }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-center">
                                            <ul>
                                                @foreach ($peminjaman->detail_peminjaman as $detailPeminjaman)
                                                    <li>{{ $detailPeminjaman->buku->penulis }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-center">
                                            @if ($peminjaman->status == 4)
                                                Selesai Dipinjam
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $peminjaman->denda }}</td>
                                        <td class="text-center">{{ $peminjaman->tanggal_pinjam }}</td>
                                        <td class="text-center">{{ $peminjaman->tanggal_pengembalian }}</td>
                                    </tr>

                                    <!-- Tambahkan jumlah buku dari peminjaman saat ini ke total buku -->
                                    @php
                                        $total_buku += count($peminjaman->detail_peminjaman);
                                    @endphp
                                @endforeach

                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <strong class="float-end">Total Buku: {{ $total_buku }}</strong>
                                    </div>
                                </div>

                            </tbody>
                        </table>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href="/keranjang" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
