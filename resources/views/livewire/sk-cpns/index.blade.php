<div class="card">
    <div class="card-header">

        @include('livewire.sk-cpns.create')
        @include('livewire.sk-cpns.update')
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
                    <th>Nama PNS</th>
                    <th>NIP</th>
                    <th>No SK CPNS</th>
                    <th>Tanggal SK</th>
                    <th>TMT SK</th>
                    <th>Pejabat Pengangkat</th>
                    <th>Softfile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skcpnss as $index => $value)
                    <tr>
                        <td>{{ $value->nama_pns }}</td>
                        <td>{{ $value->nip }}</td>
                        <td>
                            <h5><span class="badge badge-success">{{ $value->no_sk }}</span></h5>
                        </td>
                        <td><span class="badge badge-info">{{ $value->tgl_sk }}</span></td>
                        <td><span class="badge badge-info">{{ $value->tmt_sk }}</span></td>
                        <td>{{ $value->pejabat }}</td>
                        <td>
                            <a href="{{ asset('storage/SkCpns/' . $value->softfile) }}" alt="Softfile" target="_blank"
                                class="btn btn-outline-danger btn-sm mb-1"><i class="fas fa-fw fa-download"></i>
                                Softfile</a>
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

        {{ $skcpnss->links() }}
    </div>
</div>
