<!-- /.row -->
<div class="row">
    <div class="col-12">

        @include('admin-lte.flash')

        @include('admin.user.create')

        <div class="btn-group mb-3">
            <button wire:click="format" class="btn btn-sm bg-teal mr-2">Semua</button>
            <button wire:click="adminShow" class="btn btn-sm bg-indigo mr-2">Admin</button>
            <button wire:click="petugasShow" class="btn btn-sm bg-olive mr-2">Petugas</button>
            <button wire:click="peminjamShow" class="btn btn-sm bg-fuchsia mr-2">Peminjam</button>
        </div>

        <div class="card">
            <div class="card-header">
                @if ($admin || $petugas || $peminjam)
                    <span wire:click="showCreateForm" class="btn btn-sm btn-primary">Tambah</span>
                @endif

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input wire:model="search" type="search" name="table_search" class="form-control float-right"
                            placeholder="Cari">
                        <div class="input-group-append">
                            <button wire:click="searchData" type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            @if ($user->isNotEmpty())
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>NISN atau NIP</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>{{ $item->nisn_atau_nip }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->telepon }}</td>
                                    <td>
                                        @if ($item->roles[0]->name == 'admin')
                                            <span class="badge bg-indigo">Admin</span>
                                        @elseif ($item->roles[0]->name == 'petugas')
                                            <span class="badge bg-olive">Petugas</span>
                                        @else
                                            <span class="badge bg-fuchsia">Peminjam</span>
                                        @endif
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
                {{ $user->links() }}
            </div>
            <div class="col-md-1 col-lg-1 col-sm-1"></div>
        </div>

        @if ($user->isEmpty())
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
