<div class="container">
    @include('admin-lte.flash')

    <div class="card mt-4">
        <div class="card-header" style="background-color: #148518;">
            <div class="row" style="margin-bottom: -15px;">
                <div class="col-md-12 text-center text-white">
                    <div class="text" style="font-weight:bold; font-size:18px;">
                        <p>{{ $title }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-8 mb-3">
                    <button class="btn btn-md text-white" style="background-color: #148518;">
                        <!-- Tampilkan semua kategori hanya jika berada di halaman beranda -->
                        <li class="nav-item dropdown" type="none">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Kategori
                            </a>

                            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown"
                                style="cursor:pointer;">
                                <a class="dropdown-item" wire:click="semuaKategori">Semua Kategori</a>
                                <div class="dropdown-divider"> </div>

                                <!-- Pengecekan sebelum menggunakan foreach -->
                                @if (isset($kategori))
                                    @foreach ($kategori as $item)
                                        <a class="dropdown-item"
                                            wire:click="pilihKategori({{ $item->id }})">{{ $item->nama }}</a>
                                    @endforeach
                                @endif
                            </div>
                        </li>
                    </button>
                </div>
                @if (!$detail_buku)
                    <div class="col-md-4">
                        <label class="sr-only" for="search">Search</label>
                        <div class="input-group mb-2">
                            <input wire:model="search" type="text" class="form-control" id="search"
                                placeholder="Cari Buku">
                            <div class="input-group-prepend">
                                <button wire:click="searchData" class="input-group-text"
                                    style="border-top-left-radius:0%; border-bottom-left-radius:0%; background-color: #148518;">
                                    <i class="fas fa-search" style="padding: 5px; color:white;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            {{-- detail buku --}}
            @if ($detail_buku)
                <div class="card" id="card-detailbuku">
                    <div class="row g-0">
                        <div class="col-md-4" id="row-detailbuku">
                            <img src="/storage/{{ $buku->sampul }}" alt="{{ $buku->judul }}" width="300"
                                height="410" id="sampul-detail">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" id="cardbody-detail">
                                <table class="table table-borderless"
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
                    </div>
                </div>
            @else
                {{-- semua buku --}}
                @if ($buku->isNotEmpty())
                    <div class="row">
                        @foreach ($buku as $item)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div wire:click="detailBuku({{ $item->id }})" class="card mb-4 shadow"
                                    style="cursor: pointer">
                                    <img src="/storage/{{ $item->sampul }}" class="card-img-top"
                                        alt="{{ $item->judul }}" width="250" height="300">
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
                    <div class="row justify-content-center" style="margin-bottom: -10px;">
                        {{ $buku->links() }}
                    </div>
                @else
                    <div class="alert alert-danger">
                        Data tidak ada
                    </div>
                @endif
            @endif
        </div>
    </div>
</div>
