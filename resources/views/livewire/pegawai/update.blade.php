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
                        <label for="exampleFormControlInput1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama"
                            wire:model="nama">
                        @error('nama') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Jenis Kelamin</label>
                        <select id="exampleFormControlInput4" wire:model="jk" class="form-control">
                            <option value="-">-</option>
                            <option value="L">Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jk') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">NIK</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Masukan NIK"
                            wire:model="nik">
                        @error('nik') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Tanggal Lahir</label>
                        <input type="date" id="exampleFormControlInput3" wire:model="tgl_lahir" class="form-control">
                        @error('tgl_lahir') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput5">Tempat Lahir</label>
                        <textarea class="form-control" id="exampleFormControlInput5" placeholder="Masukan Tempat Lahir"
                            wire:model="tpt_lahir"></textarea>
                        @error('tpt_lahir') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput6">Jenis PTK</label>
                        <select id="exampleFormControlInput6" wire:model="jenis_ptk" class="form-control">
                            <option value="-">-</option>
                            <option value="Guru">Guru</option>
                            <option value="Tenaga Administrasi">Tenaga Administrasi</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Kasubag TU">Kasubag TU</option>
                        </select>
                        @error('jenis_ptk') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput7">Satatus PTK</label>
                        <select id="exampleFormControlInput7" wire:model="status_ptk" class="form-control">
                            <option value="-">-</option>
                            <option value="PNS">PNS</option>
                            <option value="NON PNS">NON PNS</option>
                            <option value="PPPK">PPPK</option>
                        </select>
                        @error('status_ptk') <span class="text-danger error">{{ $message }}</span>@enderror
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
