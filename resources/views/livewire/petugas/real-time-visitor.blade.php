<!-- real-time-visitor.blade.php (Livewire view) -->
<div class="row">

    @include('admin-lte.flash')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{-- untuk memfilter berdasarkan bulan --}}
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
                            <button wire:click="searchByMonth" type="submit" class="btn btn-primary">Cari</button>
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
            <div class="card-body">
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

                <!-- Tampilkan tombol navigasi paginasi -->
                <div class="row mt-3">
                    <div class="col-md-1 col-lg-1 col-sm-1"></div>
                    <div class="col-md-10 col-lg-10 col-sm-10">
                        {{ $tamu->links() }}
                    </div>
                    <div class="col-md-1 col-lg-1 col-sm-1"></div>
                </div>

                <div class="btn-group">
                    <!-- Tombol filter lainnya -->
                    <button wire:click="downloadExcel" class="btn btn-sm btn-primary" style="margin-left: 2px;">Download
                        Excel</button>
                </div>
            </div>
        </div>
    </div>

    @if ($tamu->isEmpty())
        <div class="card">
            <div class="card-body">
                <div class="alert alert-warning">
                    Anda tidak memiliki data
                </div>
            </div>
        </div>
    @endif
</div>
