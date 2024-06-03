<div>
    @section('title')
    {{ 'Create Department' }}
    @endsection
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Department</h4>
                        <h6>Create New Department</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <div class="page-btn">
                            <a href="{{ route('department.index') }}" wire:navigate class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Department</a>
                        </div>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
                    </li>
                </ul>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form wire:submit.prevent="createDepartment">
                                        <div class="mb-3">
                                            <label class="form-label">Department Name</label>
                                            <input type="text" class="form-control" wire:model="name">
                                            @error('name') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">HOD</label>
                                            <select class="select" wire:model="hod_id">
                                                <option>Choose Type</option>
                                                <option>Mitchum Daniel</option>
                                                <option>Susan Lopez</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 summer-description-box">
                                            <label class="form-label">Description</label>
                                            <div id="summernote"></div>
                                            @error('description') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="input-blocks m-0">
                                            <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                <span class="status-label">Status</span>
                                                <input type="checkbox" id="user5" class="check" checked>
                                                <label for="user5" class="checktoggle"> </label>
                                            </div>
                                        </div>
                                        <div class="modal-footer-btn">
                                            <a href="{{ route('department.index') }}" wire:navigate class="btn btn-cancel me-2">Cancel</a>
                                            <button type="submit" class="btn btn-submit">Create Department</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function() {
            $('#summernote').summernote({
                height: 200
                , callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('description', contents);
                    }
                }
            });

            // Reinitialize Summernote after Livewire updates
            Livewire.hook('message.processed', (message, component) => {
                $('#summernote').summernote({
                    height: 200
                    , callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('description', contents);
                        }
                    }
                });
            });
        });

    </script>
</div>
