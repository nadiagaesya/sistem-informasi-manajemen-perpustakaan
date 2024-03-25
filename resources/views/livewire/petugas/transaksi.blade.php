<!-- /.row -->
<div class="row">
    <div class="col-12">

        @include('admin-lte.flash')

        <div class="btn-group mb-3">
            <button wire:click="format" class="btn btn-sm bg-olive mr-2">Semua</button>
            <button wire:click="belumDipinjam" class="btn btn-sm bg-olive mr-2">Antrian Peminjaman</button>
            {{-- <button wire:click="antrianPerpanjang" class="btn btn-sm bg-lightblue mr-2">Antrian Perpanjang</button> --}}
            <button wire:click="sedangDipinjam" class="btn btn-sm bg-olive mr-2">Sedang Dipinjam</button>
            <button wire:click="dalamKeranjang" class="btn btn-sm bg-olive mr-2">Dalam Keranjang</button>
            <button wire:click="selesaiDipinjam" class="btn btn-sm bg-olive mr-2">Selesai Dipinjam</button>
        </div>

        <div class="card">
            <div class="card-header">
                {{-- @if ($belum_dipinjam || $sedang_dipinjam || $selesai_dipinjam)
                    <span wire:click="showCreateFormRak" class="btn btn-sm btn-primary">Tambah</span>
                @endif --}}
                <div class="card-tools" style="float: left;">
                    <div class="input-group input-group-sm" style="width: 200px;">
                        <select wire:model="bulan" class="form-control">
                            <option value="">Pilih Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                            <!-- Tambahkan opsi bulan lainnya sesuai kebutuhan -->
                        </select>
                        <div class="input-group-append">
                            <button wire:click="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input wire:model="search" type="search" name="table_search" class="form-control float-right"
                            placeholder="Search">
                        <div class="input-group-append">
                            <button wire:click="searchData" type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            @if ($transaksi->isNotEmpty())
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama</th>
                                <th>Kode Pinjam</th>
                                <th>Buku</th>
                                <th>Lokasi</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Denda</th>
                                <th>Status</th>
                                @if (!$selesai_dipinjam)
                                    <th width="15%">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ optional($item->user)->name }}</td>
                                    <td>{{ $item->kode_pinjam }}</td>
                                    <td>
                                        <ul>
                                            @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                                <li>{{ $detail_peminjaman->buku->judul }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                                <li>{{ $detail_peminjaman->buku->rak->lokasi }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    @if ($item->status == 0)
                                        <td>-</td>
                                        <td>-</td>
                                    @else
                                        <td>{{ \Carbon\Carbon::create($item->tanggal_pinjam)->format('d-m-Y') }}</td>
                                        <td>{{ \Carbon\Carbon::create($item->tanggal_kembali)->format('d-m-Y') }}</td>
                                    @endif
                                    {{-- menggunakan Accesor --}}
                                    {{-- <td>{{ $item->tanggal_pinjam }}</td>
                                    <td>{{ $item->tanggal_kembali }}</td> --}}
                                    <td>{{ $item->denda }}</td>
                                    <td>
                                        {{-- jika item status sama dengan 1 maka belum dipinjam --}}
                                        @if ($item->status == 1)
                                            <span class="badge bg-olive">Antrian Peminjaman</span>
                                            {{-- @elseif ($item->status == 2)
                                            <span class="badge bg-lightblue">Antrian Perpanjang</span> --}}
                                        @elseif ($item->status == 3)
                                            <span class="badge bg-olive">Sedang Dipinjam</span>
                                        @elseif ($item->status == 4)
                                            <span class="badge bg-olive">Selesai Dipinjam</span>
                                        @elseif ($item->status == 5)
                                            <span class="badge bg-olive">Kosong</span>
                                        @else
                                            <span class="badge bg-olive">Dalam Keranjang</span>
                                        @endif
                                    </td>
                                    @if (!$selesai_dipinjam)
                                        <td>
                                            @if ($item->status == 1)
                                                <span wire:click="showPinjam({{ $item->id }})"
                                                    class="btn btn-sm btn-success mr-2">Setujui Pinjam</span>
                                                {{-- @elseif ($item->status == 2)
                                                <span wire:click="showPerpanjang({{ $item->id }})"
                                                    class="btn btn-sm btn-dark mr-2">Setujui Perpanjang</span> --}}
                                            @elseif ($item->status == 3)
                                                <span wire:click="showKembali({{ $item->id }})"
                                                    class="btn btn-sm btn-primary mr-2">Kembalikan Buku</span>
                                            @endif
                                            {{-- <div class="btn-group">
                                        <span wire:click="showEditForm({{ $item->id }})"
                                            class="btn btn-sm btn-primary mr-2">Edit</span>
                                        <span wire:click="showDelete({{ $item->id }})"
                                            class="btn btn-sm btn-danger">Hapus</span>
                                    </div> --}}
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer text-body-secondary p-2" style="text-align: end">
                        <button wire:click="exportPeminjaman" class="btn btn-primary">Unduh Riwayat Peminjaman</button>
                    </div>
                </div>
                <!-- /.card-body -->
            @endif
        </div>
        <!-- /.card -->
        <div class="row justify-content-center">
            {{ $transaksi->links() }}
        </div>

        @if ($transaksi->isEmpty())
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning">
                        Anda tidak memiliki data
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<!-- /.row -->
