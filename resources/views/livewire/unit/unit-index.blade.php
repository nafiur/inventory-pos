<div>
    <table class="table  datanew ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Short Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($units as $unit)
            <tr>
                <td>{{ $unit->name }}</td>
                <td>{{ $unit->short_name }}</td>
                <td>
                    <a href="{{ route('edit.unit', $unit->id) }}" class="me-2 p-2">
                        <i data-feather="edit" class="feather-edit"></i>
                    </a>
                    <a href="{{ route('delete.unit', $unit->id) }}" class="p-2" wire:click.prevent="confirmDelete({{ $unit->id }})">
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        Livewire.on('confirmDelete', unitId => {
            if (confirm('Are you sure you want to delete this unit?')) {
                Livewire.emit('deleteUnit', unitId);
            }
        });

    </script>
</div>
