<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-fw fa-plus"></i> Tambah Data
</button>
<a class="btn btn-outline-success mb-1" href="{{ route('export-out') }}"><i class="fa fa-fw fa-file-excel"></i>Export
    Daftar
    Surat
    (Excel)</a>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No Surat</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan No Surat" wire:model="no_surat">
                        @error('no_surat') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Tanggal Surat</label>
                        <input type="date" class="form-control" id="exampleFormControlInput2"
                            placeholder="Tanggal Surat" wire:model="tgl_surat">
                        @error('tgl_surat') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Perihal</label>
                        <input type="text" class="form-control" id="exampleFormControlInput3"
                            placeholder="Perihal Surat" wire:model="perihal">
                        @error('perihal') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Tujuan Surat</label>
                        <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Tujuan Surat"
                            wire:model="tujuan">
                        @error('tujuan') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput5">Keterangan</label>
                        <textarea class="form-control" id="exampleFormControlInput5" placeholder="Keterangan"
                            wire:model="keterangan"></textarea>
                        @error('keterangan') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="customFile">Softfile</label>
                        <div class="custom-file">
                            <label class="custom-file-label">
                                @if ($softfile)
                                    <a href="{{ $softfile }}">File Terupload</a>
                                @endif
                            </label>
                            <input wire:model="softfile" type="file" class="custom-file-input" id="customFile">
                            @error('softfile') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
