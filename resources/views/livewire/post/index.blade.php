<div class="card">
    <div class="card-header">

        @include('livewire.post.create')
        @include('livewire.post.update')
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
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Judul</th>
                    <th>Tag</th>
                    <th>Deskripsi Singkat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $index => $value)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/Post/' . $value->foto) }}" alt="Foto {{ $value->judul }}"
                                class="rounded img-thumbnail mx-auto d-block" style="height: 80px; width:60px">
                        </td>
                        <td>{{ $value->foto }}</td>
                        <td>{{ $value->judul }}</td>
                        <td>{{ $value->tag }}</td>
                        <td>{{ $value->des_singkat }}</td>
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

        {{ $posts->links() }}
    </div>
</div>
