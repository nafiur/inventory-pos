@extends('backend.admin_master')
@section('content')
@section('title')
{{ 'Dashboard' }}
@endsection
<div class="page-wrapper">
    <div class="content">

        <div class="page-header">
            <div class="add-item d-flex">
                <div class="page-title">
                    <h4>Brand</h4>
                    <h6>Manage your brands</h6>
                </div>
            </div>
            <ul class="table-top-head">
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="{{ asset('backend/assets/img/icons/pdf.svg') }}" alt="img"></a>
                </li>
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="{{ asset('backend/assets/img/icons/excel.svg') }}" alt="img"></a>
                </li>
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
                </li>
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
                </li>
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
                </li>
            </ul>
            <div class="page-btn">
                <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-brand"><i data-feather="plus-circle" class="me-2"></i>Add New Brand</a>
            </div>
        </div>
        @livewire('brand.create-brand')
        @livewire('brand.edit-brand')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @livewire('brand.brand-index')
                </div>
            </div>
        </div>
    </div>
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
@endsection
