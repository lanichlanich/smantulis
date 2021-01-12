<div class="card">
    <div class="card-header">

        @include('livewire.pegawai.create')
        @include('livewire.pegawai.update')
        @if (session()->has('message'))
            <div class="alert alert-success" style="margin-top:30px;">
                {{ session('message') }}
                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th>JK</th>
                    <th>NIK</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $index => $value)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/Pegawai/' . $value->foto) }}" alt="Foto {{ $value->nama }}"
                                class="rounded img-thumbnail" style="height: 200px; width:140px">
                        </td>
                        <td><span class="badge badge-info">{{ $value->nama }}</span></td>
                        <td>{{ $value->jk }}</td>
                        <td>{{ $value->nik }}</td>
                        <td>{{ $value->tgl_lahir }}</td>
                        <td>{{ $value->tpt_lahir }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})"
                                class="btn btn-warning btn-sm mb-1"><i class="fa fa-magic"></i> Edit</button>
                            <button wire:click="delete({{ $value->id }})" onclick="return confirm('Apakah Anda yakin?')"
                                class="btn btn-danger btn-sm mb-1"><i class="fa fa-fw fa-trash"></i> Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">

        {{ $pegawais->links() }}
    </div>
</div>
