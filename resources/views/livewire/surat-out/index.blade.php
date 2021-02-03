<div class="card">
    <div class="card-header">

        @include('livewire.surat-out.create')
        @include('livewire.surat-out.update')
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
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Perhal Surat</th>
                    <th>Tujuan Surat</th>
                    <th>Keterangan Surat</th>
                    <th>Softfile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratouts as $index => $value)
                    <tr>
                        <td>
                            <h5><span class="badge badge-success">{{ $value->no_surat }}
                                </span></h5>
                        </td>
                        <td><span class="badge badge-info">{{ $value->tgl_surat }}</span></td>
                        <td>{{ $value->perihal }}</td>
                        <td>{{ $value->tujuan }}</td>
                        <td>{{ $value->keterangan }}</td>
                        <td>
                            <a href="{{ asset('storage/SuratKeluar/' . $value->softfile) }}" alt="Softfile"
                                target="_blank" class="btn btn-outline-danger btn-sm mb-1"><i
                                    class="fas fa-fw fa-download"></i> Softfile</a>
                        </td>

                        <td>
                            <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})"
                                class="btn btn-warning btn-sm mb-1"><i class="fa fa-magic"></i> Edit</button>
                            <button onclick="return confirm('Apakah Anda yakin?') || event.stopImmediatePropagation()"
                                wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm mb-1"><i
                                    class="fa fa-fw fa-trash"></i>
                                Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">

        {{ $suratouts->links() }}
    </div>
</div>
