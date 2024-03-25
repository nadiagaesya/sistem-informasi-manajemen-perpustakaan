<div class="container">
    @include('admin-lte.flash')

    <div class="row" style="margin-top:70px; ">
        <div class="col-md-8 mb-3">
            <h1>{{ $title }}</h1>
        </div>
        @if (!$detail_buku)
            <div class="col-md-4">
                <label class="sr-only" for="search">Username</label>
                <div class="input-group mb-2">
                    <input wire:model="search" type="text" class="form-control" id="search" placeholder="Cari Buku">
                    <div class="input-group-prepend">
                        <button wire:click="searchData" class="input-group-text"
                            style="border-top-left-radius:0%; border-bottom-left-radius:0%">
                            <i class="fas fa-search" style="padding: 5px"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>

    @if ($detail_buku)
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="/storage/{{ $buku->sampul }}" alt="{{ $buku->judul }}" width="300" height="400"
                    style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
            </div>
            <div class="col-md-6">
                <table class="table table-borderless table-primary text-nowrap"
                    style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); border-radius: 10px;
                            overflow: hidden;">
                    <tbody>
                        <tr>
                            <th width="100" style="text-indent: 30px;">Judul</th>
                            <td width="1">:</td>
                            <td>{{ $buku->judul }}</td>
                        </tr>
                        <tr>
                            <th style="text-indent: 30px;">Penulis</th>
                            <td>:</td>
                            <td>{{ $buku->penulis }}</td>
                        </tr>
                        <tr>
                            <th style="text-indent: 30px;">Kategori</th>
                            <td>:</td>
                            <td>{{ $buku->kategori->nama }}</td>
                        </tr>
                        <tr>
                            <th style="text-indent: 30px;">Penerbit</th>
                            <td>:</td>
                            <td>{{ $buku->penerbit->nama }}</td>
                        </tr>
                        <tr>
                            <th style="text-indent: 30px;">Rak</th>
                            <td>:</td>
                            <td>{{ $buku->rak->rak }}</td>
                        </tr>
                        <tr>
                            <th style="text-indent: 30px;">Baris</th>
                            <td>:</td>
                            <td>{{ $buku->rak->baris }}</td>
                        </tr>
                        <tr>
                            <th style="text-indent: 30px;">Stok</th>
                            <td>:</td>
                            <td>{{ $buku->stok }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="/" class="btn btn-danger mt-5" style="float: right;">Kembali</a>
                <button wire:click="keranjang({{ $buku->id }})" class="btn btn-primary mt-5"
                    style="float: end;">Keranjang</button>
            </div>
        </div>
    @else
        @if ($buku->isNotEmpty())
            <div class="row">
                @foreach ($buku as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div wire:click="detailBuku({{ $item->id }})" class="card mb-4 shadow"
                            style="cursor: pointer">
                            <img src="/storage/{{ $item->sampul }}" class="card-img-top" alt="{{ $item->judul }}"
                                width="250" height="300">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <strong>{{ $item->judul }}</strong>
                                </h5>
                                <p class="card-text">{{ $item->penulis }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                {{ $buku->links() }}
            </div>
        @else
            <div class="alert alert-danger">
                Data tidak ada
            </div>
        @endif
    @endif

</div>
