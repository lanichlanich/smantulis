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
                    <input type="hidden" wire:model="skkgb_id">
                    <div class="form-group">
                        <label for="exampleFormControlInput0">Nama PNS</label>
                        <select id="exampleFormControlInput0" wire:model="nama_pns" class="form-control">
                            <option value="-">-</option>
                            @foreach ($pegawai as $pgw)
                                <option value="{{ $pgw->nama }}">{{ $pgw->nama }}</option>
                            @endforeach
                        </select>
                        @error('nama_pns') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">No SK PNS</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2"
                            placeholder="Tanggal Surat" wire:model="no_sk">
                        @error('no_sk') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Tanggal SK</label>
                        <input type="date" class="form-control" id="exampleFormControlInput3" wire:model="tgl_sk">
                        @error('tgl_sk') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">TMT SK</label>
                        <input type="date" class="form-control" id="exampleFormControlInput4" wire:model="tmt_sk">
                        @error('tmt_sk') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput8">KGB Berikutnya (2 Tahun Setelah TMT KGB)</label>
                        <input type="date" class="form-control" id="exampleFormControlInput8" wire:model="kgb_yad">
                        @error('kgb_yad') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput6">Golongan</label>
                        <select id="exampleFormControlInput6" wire:model="golongan" class="form-control">
                            <option value="-">-</option>
                            <option value="II/a">II/a</option>
                            <option value="II/b">II/b</option>
                            <option value="II/c">II/c</option>
                            <option value="II/d">II/d</option>
                            <option value="III/a">III/a</option>
                            <option value="III/b">III/b</option>
                            <option value="III/c">III/c</option>
                            <option value="III/d">III/d</option>
                            <option value="IV/a">IV/a</option>
                            <option value="IV/b">IV/b</option>
                            <option value="IV/c">IV/c</option>
                            <option value="IV/d">IV/d</option>
                            <option value="IV/e">IV/e</option>
                        </select>
                        @error('golongan') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput7">Masa Kerja Golongan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput7"
                            placeholder="00 Tahun 00 Bulan" wire:model="masa_kerja">
                        @error('masa_kerja') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput7">Gaji Pokok</label>
                        <input type="number" class="form-control" id="exampleFormControlInput7" placeholder="Gaji Pokok"
                            wire:model="gaji_pokok">
                        @error('gaji_pokok') <span class="text-danger error">{{ $message }}</span>@enderror
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
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
