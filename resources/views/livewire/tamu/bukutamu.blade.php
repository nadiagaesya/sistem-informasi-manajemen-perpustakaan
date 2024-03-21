<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin-lte.flash')
            <div class="card mt-4" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <div class="card-header text-white text-center"
                    style="background: rgba(17,135,21,255); font-size:16px; font-weight:bold;">Buku Tamu</div>
                <div class="card-body">
                    <!-- Form untuk menambahkan entri baru -->
                    <div>
                        <form wire:submit.prevent="submit">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control mb-2" id="nama_lengkap"
                                    wire:model="nama_lengkap">
                                @error('nama_lengkap')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="number" class="form-control mb-2" id="telepon" wire:model="telepon">
                                @error('telepon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="instansi">Instansi</label>
                                <input type="text" class="form-control mb-2" id="instansi" wire:model="instansi">
                                @error('instansi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="keperluan">Keperluan</label>
                                <input type="text" class="form-control mb-2" id="keperluan" wire:model="keperluan">
                                @error('keperluan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="margin-top: 50px;">
        {{-- untuk menampilkan tgl today dan jumlah pengunjung di hari ini --}}
        <div class="col-md-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    {{-- <p style="font-size: 16px; font-weight:bold;">Hari ini : {{ now()->format('d-m-Y') }}</p> --}}
                    {{-- <span>Pengunjung :{{ $jumlahPengunjungHariIni }}</span> --}}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-2">
                <input wire:model="search" type="text" class="form-control" id="search"
                    placeholder="Cari Pengunjung">
                <div class="input-group-prepend">
                    <button wire:click="searchData" class="input-group-text"
                        style="border-top-left-radius:0%; border-bottom-left-radius:0%">
                        <i class="fas fa-search" style="padding: 5px"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-bottom:100px;">
        <div class="col-md-12">
            <!-- Tabel untuk menampilkan data -->
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
                    @foreach ($tamu as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_lengkap }}</td>
                            <td>{{ $data->telepon }}</td>
                            <td>{{ $data->instansi }}</td>
                            <td>{{ $data->keperluan }}</td>
                            <td>{{ $data->created_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
