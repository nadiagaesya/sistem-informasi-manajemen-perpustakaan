@if (session('sukses'))
    <div class="alert alert-success mt-5">
        {{ session('sukses') }}
    </div>
@endif
@if (session('gagal'))
    <div class="alert alert-danger mt-5">
        {{ session('gagal') }}
    </div>
@endif
