<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama"
                                    placeholder="Masukan Nama lengkap + Title" wire:model="nama">
                                @error('nama') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select id="jk" wire:model="jk" class="form-control">
                                    <option value="-">-</option>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jk') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" placeholder="Masukan NIP (untuk PNS)"
                                    wire:model="nip">
                            </div>
                            <div class="form-group">
                                <label for="nuptk">NUPTK</label>
                                <input type="text" class="form-control" id="nuptk"
                                    placeholder="Masukan NUPTK (bagi yang punya)" wire:model="nuptk">
                            </div>
                            <div class="form-group">
                                <label for="tpt_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tpt_lahir"
                                    placeholder="Masukan Tempat Lahir" wire:model="tpt_lahir">
                                @error('tpt_lahir') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" wire:model="tgl_lahir" class="form-control">
                                @error('tgl_lahir') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="ibu">Ibu Kandung</label>
                                <input type="text" class="form-control" id="ibu" placeholder="Masukan Nama Ibu Kandung"
                                    wire:model="ibu">
                                @error('ibu') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="jenis_ptk">Jenis PTK</label>
                                <select id="jenis_ptk" wire:model="jenis_ptk" class="form-control">
                                    <option value="-">-</option>
                                    <option value="Guru">Guru</option>
                                    <option value="Tenaga Administrasi">Tenaga Administrasi</option>
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                </select>
                                @error('jenis_ptk') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="status_ptk">Status PTK</label>
                                <select id="status_ptk" wire:model="status_ptk" class="form-control">
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="Masukan NIK"
                                    wire:model="nik">
                                @error('nik') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="kk">No KK</label>
                                <input type="text" class="form-control" id="kk" placeholder="Masukan No KK"
                                    wire:model="kk">
                                @error('kk') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat"
                                    wire:model="alamat">
                                @error('alamat') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="suami_istri">Suami / Istri</label>
                                <input type="text" class="form-control" id="suami_istri"
                                    placeholder="Masukan Nama Suami / Istri" wire:model="suami_istri">
                                @error('suami_istri') <span
                                    class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="anak1">Anak Ke-1</label>
                                <input type="text" class="form-control" id="anak1" placeholder="Masukan Nama Anak Ke-1"
                                    wire:model="anak1">
                                {{-- @error('anak1') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="anak2">Anak Ke-2</label>
                                <input type="text" class="form-control" id="anak2" placeholder="Masukan Nama Anak Ke-2"
                                    wire:model="anak2">
                                {{-- @error('anak2') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="anak3">Anak Ke-3</label>
                                <input type="text" class="form-control" id="anak3" placeholder="Masukan Nama Anak Ke-3"
                                    wire:model="anak3">
                                {{-- @error('anak3') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="karpeg">Karpeg</label>
                                <input type="text" class="form-control" id="karpeg" placeholder="Masukan No Karpeg"
                                    wire:model="karpeg">
                                {{-- @error('karpeg') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="bpjs">BPJS</label>
                                <input type="text" class="form-control" id="bpjs" placeholder="Masukan No BPJS"
                                    wire:model="bpjs">
                                {{-- @error('bpjs') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                            </div>
                            <div class="form-group">
                                <label for="npwp">NPWP</label>
                                <input type="text" class="form-control" id="npwp" placeholder="Masukan No NPWP"
                                    wire:model="npwp">
                                {{-- @error('npwp') <span class="text-danger error">{{ $message }}</span>@enderror --}}
                            </div>
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
