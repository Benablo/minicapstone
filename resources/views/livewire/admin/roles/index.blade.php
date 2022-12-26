<div>
    <div class="container mt-3">
        <h1 class="text-center" style="font-weight: 400; font-size:25px; color: ">Roles</h1>
        @include('livewire.modals.admin-modal')
        @if (session('message'))
            <div class="alert alert-success text-black text-center" id="messagee">{{ session('message') }}</div>
        @endif
        <div class='btn btn-primary btn-sm float-end mb-2'  style="background-color: #000000; color:white;" data-toggle="modal" data-target="#modal-roles">Create New Role</div>
        <input type="search" class="form-control text-center float-start mx-2 mb-3" style="width: 910px;"  placeholder="Search" wire:model.lazy="search">
        <div class="card-body">
            <table class="table shadow-lg text-center table-hover table-dark table-striped">
                <thead style="background-color:#1e2120; color:#f4f9ed;">
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="" class="btn btn-warning" id="ic" title="Edit" data-toggle="modal" data-target="#update-modal-roles" wire:click="editRoles({{ $role->id }})"><i class=" fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger" id="ic" title="Delete" data-toggle="modal" data-target="#delete-modal-roles" wire:click="delete({{ $role->id }})"><i class=" fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    @if($roles->count() == 0)
                        <td colspan="2" class="text-center">
                            No roles found in this table.
                        </td>
                    @endif
                </tbody>
            </table>
        </div>
        <div>
            {{ $roles->links() }}
        </div>
    </div>
</div>
<style>
    .close {
        border-radius: 50%;
        width: 25px;
        border: none;
    }
    .close span {
        color: rgb(0, 0, 0);
    }
    .close:hover {
        background-color: rgb(0, 0, 0);
    }
    .title3 {
        margin-left: 8%;
    }
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
</style>
