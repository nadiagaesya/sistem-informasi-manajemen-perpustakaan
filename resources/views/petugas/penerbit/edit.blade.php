@if ($edit)
    <div class="modal fade show" id="modal-default" style="padding-right: 17px; display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">Edit Penerbit</div>
                    <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input wire:model="nama" type="text" class="form-control" id="penerbit" min="1">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                    <span wire:click="update({{$penerbit_id}})" type="button" class="btn btn-primary">Ubah</span>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endif
