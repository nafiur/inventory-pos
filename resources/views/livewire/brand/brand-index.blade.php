<div>
    <div class="table-responsive">
        <table class="table datanew">
            <thead>
                <tr>
                    <th>Brand Name</th>
                    <th>Logo</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                <tr>
                    <td>{{ $brand->name }}</td>
                    <td><span class="d-flex"><img src="{{ asset('backend/assets/img/brand/brand-icon-01.png') }}" alt="Brand Logo"></span></td>
                    <td><span class="badge badge-linesuccess">{{ $brand->status ? 'Active' : 'Inactive' }}</span></td>
                    <td class="action-table-data">
                        <div class="edit-delete-action">
                            <a class="me-2 p-2" href="#" wire:click.prevent="$emit('editBrand', {{ $brand->id }})">
                                <i data-feather="edit" class="feather-edit"></i>
                            </a>
                            <a class="confirm-text p-2" href="#" wire:click.prevent="deleteBrand({{ $brand->id }})">
                                <i data-feather="trash-2" class="feather-trash-2"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('livewire:load', function() {
            window.livewire.on('show-edit-brand-modal', () => {
                $('#edit-brand').modal('show');
            });
            window.livewire.on('hide-edit-brand-modal', () => {
                $('#edit-brand').modal('hide');
            });
        });

    </script>
    <script>
        document.addEventListener('livewire:load', function() {
            // Listen for brandCreated event
            window.livewire.on('brandCreated', () => {
                // Close the modal
                $('#add-brand').modal('hide');
                // Refresh the datatable
                Livewire.emit('refreshDatatable');
            });
        });

    </script>


</div>
