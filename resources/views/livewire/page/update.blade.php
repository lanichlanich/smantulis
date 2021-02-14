<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    wire:click.prevent="cancel()">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Judul</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan Judul" wire:model="judul">
                        @error('judul') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group" wire:ignore>
                        <label for="exampleFormControlInput5">Isi Postingan</label>
                        <input wire:model="isi_post" name="isi_post2" id="isi_post2" type="hidden">
                        <textarea wire:model="isi_post" id="summernote2" class="form-controll summernote2"></textarea>
                    </div>
                    <div class="form-group">
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    $('#summernote2').summernote({
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
                @this.set('isi_post2', contents);
            }
        }
    });

</script>
