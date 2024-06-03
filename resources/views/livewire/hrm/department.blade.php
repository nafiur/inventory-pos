<div>
    @section('title')
    {{ 'Department' }}
    @endsection
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>Department</h4>
                        <h6>Manage Department</h6>
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
                    <a href="{{ route('department.create') }}" wire:navigate class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add Department</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body pb-0">
                    <div class="table-top table-top-new">
                        <div class="search-set mb-0">
                            <div class="total-employees">
                                <h6><i data-feather="users" class="feather-user"></i>Total Employees <span>21</span></h6>
                            </div>
                            <div class="search-input">
                                <a href class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
                                <input type="search" class="form-control">
                            </div>
                        </div>
                        <div class="search-path d-flex align-items-center search-path-new">
                            <div class="d-flex">
                                <a class="btn btn-filter" id="filter_search">
                                    <i data-feather="filter" class="filter-icon"></i>
                                    <span><img src="{{ asset('backend/assets/img/icons/closes.svg') }}" alt="img"></span>
                                </a>
                                <a href="department-list.html" class="btn-list"><i data-feather="list" class="feather-user"></i></a>
                                <a href="department-grid.html" class="btn-grid active"><i data-feather="grid" class="feather-user"></i></a>
                            </div>
                            <div class="form-sort">
                                <i data-feather="sliders" class="info-img"></i>
                                <select class="select">
                                    <option>Sort by Date</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="file-text" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Department</option>
                                            <option>UI/UX</option>
                                            <option>HR</option>
                                            <option>Admin</option>
                                            <option>Engineering</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="users" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose HOD</option>
                                            <option>Mitchum Daniel</option>
                                            <option>Susan Lopez</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                                    <div class="input-blocks">
                                        <a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="employee-grid-widget">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="employee-grid-profile">
                            <div class="profile-head">
                                <div class="dep-name">
                                    <h5 class="active">UI/UX</h5>
                                </div>
                                <div class="profile-head-action">
                                    <div class="dropdown profile-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="more-vertical" class="feather-user"></i></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit-department"><i data-feather="edit" class="info-img"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item confirm-text mb-0"><i data-feather="trash-2" class="info-img"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-info department-profile-info">
                                <div class="profile-pic">
                                    <img src="{{ asset('backend/assets/img/users/user-01.jpg') }}" alt>
                                </div>
                                <h4>Mitchum Daniel</h4>
                            </div>
                            <ul class="team-members">
                                <li>
                                    Total Members: 07
                                </li>
                                <li>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/assets/img/users/user-01.jpg') }}" alt></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/assets/img/users/user-02.jpg') }}" alt></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/assets/img/users/user-03.jpg') }}" alt></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><img src="{{ asset('backend/assets/img/users/user-04.jpg') }}" alt><span>+4</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <div class="container-fluid">
                <div class="row custom-pagination">
                    <div class="col-md-12">
                        <div class="paginations d-flex justify-content-end mb-3">
                            <span><i class="fas fa-chevron-left"></i></span>
                            <ul class="d-flex align-items-center page-wrap">
                                <li>
                                    <a href="javascript:void(0);" class="active">
                                        1
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        4
                                    </a>
                                </li>
                            </ul>
                            <span><i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
