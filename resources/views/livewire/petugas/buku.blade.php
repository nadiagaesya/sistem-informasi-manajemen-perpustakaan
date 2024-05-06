<!-- /.row -->
<div class="row">
    <div class="col-12">

        @include('admin-lte.flash')

        @include('petugas.buku.create')

        @include('petugas.buku.edit')

        @include('petugas.buku.delete')

        @include('petugas.buku.show')

        <div class="card">
            <div class="card-header">
                <span wire:click="showCreateForm" class="btn btn-sm btn-primary">Tambah</span>

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
            @if ($buku->isNotEmpty())
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Sampul</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="/storage/{{ $item->sampul }}" alt="{{ $item->judul }}" width="60"
                                            height="80"></td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->penulis }}</td>
                                    <td>{{ $item->kategori->nama }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <span wire:click="showBuku({{ $item->id }})"
                                                class="btn btn-sm btn-success mr-2">Lihat</span>
                                            <span wire:click="showEditForm({{ $item->id }})"
                                                class="btn btn-sm btn-primary mr-2">Edit</span>
                                            <span wire:click="showDelete({{ $item->id }})"
                                                class="btn btn-sm btn-danger">Hapus</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            @endif
        </div>
        <!-- /.card -->

        <div class="row mt-3">
            <div class="col-md-1 col-lg-1 col-sm-1"></div>
            <div class="col-md-10 col-lg-10 col-sm-10">
                {{ $buku->links() }}
            </div>
            <div class="col-md-1 col-lg-1 col-sm-1"></div>
        </div>

        @if ($buku->isEmpty())
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
