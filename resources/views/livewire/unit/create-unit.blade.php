<div>
    @section('title')
    {{ 'Create Unit' }}
    @endsection
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Units</h4>
                        <h6>Create New Unit</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <div class="page-btn">
                            <a href="{{ route('unit.index') }}" wire:navigate class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Unit</a>
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
                        <div class="col-md-6 mx-auto">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form wire:submit.prevent="createUnit">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" wire:model="name">
                                            @error('name') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Short Name</label>
                                            <input type="text" class="form-control" wire:model="short_name">
                                            @error('name') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="mb-0">
                                            <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                                                <span class="status-label">Status</span>
                                                <input type="checkbox" id="status" class="check" wire:model="status">
                                                <label for="status" class="checktoggle"></label>
                                            </div>
                                            @error('status') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="modal-footer-btn">
                                            <a href="{{ route('unit.index') }}" wire:navigate class="btn btn-cancel me-2">Cancel</a>
                                            <button type="submit" class="btn btn-submit">Create Unit</button>
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
</div>
