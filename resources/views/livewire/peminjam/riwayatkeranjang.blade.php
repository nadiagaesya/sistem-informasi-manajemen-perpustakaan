<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="text" style="font-weight:bold; font-size:18px;">
                <p>Riwayat Peminjaman</p>
            </div>
        </div>

        @include('admin-lte/flash')

        <div class="container card p-4">
            <ol class="breadcrumb col-lg-12 p-1" style="background-color: #e9ecef;">


                <li class="breadcrumb-item"><a class="breadcrumb-item active fw-bold text-dark" href="/keranjang">Daftar
                        Pinjam
                        (0)</a></li>

                <span class="px-2">|</span>
                <li class="breadcrumb-item"><a href="/riwayatkeranjang">Riwayat Pinjam
                        (0)</a></li>
            </ol>

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
                                @endforeach
                            </tbody>


                            {{-- <tbody>
                                @foreach ($riwayatPeminjaman as $peminjaman)
                                    <tr class="odd">
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            {{ $peminjaman->kode_pinjam }}
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            <ul>
                                                @foreach ($peminjaman->detail_peminjaman as $detailPeminjaman)
                                                    <li>{{ $detailPeminjaman->buku->judul }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            <ul>
                                                @foreach ($peminjaman->detail_peminjaman as $detailPeminjaman)
                                                    <li>{{ $detailPeminjaman->buku->penulis }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            @if ($peminjaman->status == 4)
                                                Selesai Dipinjam
                                            @endif
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            {{ $peminjaman->denda }}
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            {{ $peminjaman->tanggal_pinjam }}
                                        </td>
                                        <td valign="top" colspan="1" class="dataTables_empty">
                                            {{ $peminjaman->tanggal_pengembalian }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody> --}}
                        </table>

                        {{-- <div class="row">
                            <div class="col-lg-6">
                                @if (!$keranjang->tanggal_pinjam)
                                    @php
                                        $itemsToDelete = $keranjang->detail_peminjaman->where(
                                            'peminjaman.status',
                                            '!=',
                                            2,
                                        );
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
                        </div> --}}
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatables_info" role="status" aria-live="polite">
                            Menampilkan
                            0 sampai 0 dari 0 entri</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="datatables_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="datatables_previous"><a
                                        aria-controls="datatables" aria-disabled="true" role="link"
                                        data-dt-idx="previous" tabindex="-1" class="page-link">Sebelumnya</a></li>
                                <li class="paginate_button page-item next disabled" id="datatables_next"><a
                                        aria-controls="datatables" aria-disabled="true" role="link"
                                        data-dt-idx="next" tabindex="-1" class="page-link">Selanjutnya</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
