<button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-fw fa-plus"></i> Tambah Data
</button>
<a class="btn btn-outline-success mb-1" href="{{ route('export-page') }}"><i class="fa fa-fw fa-file-excel"></i>Export
    Daftar
    Page
    (Excel)</a>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
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
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan Judul" wire:model="judul">
                        @error('judul') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group" wire:ignore>
                        <label for="exampleFormControlInput5">Isi Postingan</label>

                        <input wire:model="isi_post" name="isi_post" id="isi_post" type="hidden">
                        <textarea id="summernote" class="form-controll summernote"></textarea>
                    </div>
                    <div class="form-group">
                        @error('isi_post') <span class="text-danger error">{{ $message }}</span>@enderror
                        <label for="customFile">Foto</label>
                        <div class="custom-file">
                            <label class="custom-file-label">
                                @if ($foto)
                                    <a href="{{ $foto }}">Foto Terupload</a>
                                @endif
                            </label>
                            <input wire:model="foto" type="file" class="custom-file-input" id="customFile">
                            @error('foto') <small class="text-danger">{{ $message }}</small> @enderror
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
            onChange: function(contents, $editable) {
                @this.set('isi_post', contents);
            }
        }
    });

</script>
