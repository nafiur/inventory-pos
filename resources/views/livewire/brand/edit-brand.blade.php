<div>
    <div wire:ignore.self class="modal fade" id="edit-brand">
        <div class="modal-dialog modal-dialog-centered custom-modal-two">
            <div class="modal-content">
                <div class="page-wrapper-new p-0">
                    <div class="content">
                        <div class="modal-header border-0 custom-modal-header">
                            <div class="page-title">
                                <h4>Edit Brand</h4>
                            </div>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body custom-modal-body new-employee-field">
                            <form wire:submit.prevent="saveChanges">
                                <div class="mb-3">
                                    <label class="form-label">Brand</label>
                                    <input type="text" class="form-control" wire:model="name">
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <label class="form-label">Logo</label>
                                <div class="profile-pic-upload mb-3">
                                    <div class="profile-pic brand-pic">
                                        @if ($logo)
                                        <img src="{{ $logo->temporaryUrl() }}">
                                        @elseif ($brand && $brand->logo)
                                        <img src="{{ asset('storage/' . $brand->logo) }}">
                                        @else
                                        <span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
                                        @endif
                                    </div>
                                    <div class="image-upload mb-0">
                                        <input type="file" wire:model="logo">
                                        <div class="image-uploads">
                                            <h4>Change Image</h4>
                                        </div>
                                    </div>
                                    @error('logo') <span class="error">{{ $message }}</span> @enderror
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
                                    <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-submit">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
