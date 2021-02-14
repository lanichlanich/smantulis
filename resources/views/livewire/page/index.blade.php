<div class="card">
    <div class="card-header">

        @include('livewire.page.create')
        @include('livewire.page.update')
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
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $index => $value)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/page/' . $value->foto) }}" alt="Foto {{ $value->nama }}"
                                class="rounded img-thumbnail mx-auto d-block" style="height: 80px; width:60px">
                        </td>
                        <td>{{ $value->judul }}</td>
                        <td>{{ $value->slug }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#updateModal"
                                wire:click="edit({{ $value->id }})" class="btn btn-warning btn-sm mb-1"><i
                                    class="fa fa-magic"></i> Edit</button>
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

        {{ $pages->links() }}
    </div>
</div>
