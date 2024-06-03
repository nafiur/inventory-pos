<div>
    @section('title')
    {{ 'Users' }}
    @endsection
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4>User List</h4>
                        <h6>Manage Your Users</h6>
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
                    {{-- <a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i data-feather="plus-circle" class="me-2"></i>Add New User</a> --}}
                    <button wire:click="create()" class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add New User</button>
                </div>
            </div>
            @if($isOpen)
            @include('livewire.user-create')
            @endif
            <div class="card table-list-card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-input">
                                <a href class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
                            </div>
                        </div>
                        <div class="search-path">
                            <div class="d-flex align-items-center">
                                <a class="btn btn-filter" id="filter_search">
                                    <i data-feather="filter" class="filter-icon"></i>
                                    <span><img src="{{ asset('backend/assets/img/icons/closes.svg') }}" alt="img"></span>
                                </a>
                            </div>
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

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="user" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Name</option>
                                            <option>Lilly</option>
                                            <option>Benjamin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="stop-circle" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <i data-feather="zap" class="info-img"></i>
                                        <select class="select">
                                            <option>Choose Role</option>
                                            <option>Store Keeper</option>
                                            <option>Salesman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="input-blocks">
                                        <a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th class="no-sort">
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>email</th>
                                    <th>Role</th>
                                    <th>Created On</th>
                                    <th>Status</th>
                                    <th class="no-sort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ asset('backend/assets/img/users/user-23.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Thomas</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+12163547758</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="74001c1b19150734110c15190418115a171b19">[email&#160;protected]</a></td>
                                    <td>Admin</td>
                                    <td>19 Jan 2023</td>
                                    <td><span class="badge badge-linedanger">Inactive</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ asset('backend/assets/img/users/user-15.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Rose</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+11367529510 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7a5b8a4b297b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</a></td>
                                    <td>Manager</td>
                                    <td>23 Jan 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ asset('backend/assets/img/users/user-16.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Benjamin</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+15362789414 </td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7012151e1a111d191e301508111d001c155e131f1d">[email&#160;protected]</a></td>
                                    <td>Salesman</td>
                                    <td>07 Feb 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ asset('backend/assets/img/users/user-17.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Kaitlin</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+18513094627</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b9d2d8d0cdd5d0d7f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</a></td>
                                    <td>Supervisor</td>
                                    <td>18 Feb 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ asset('backend/assets/img/users/user-18.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Lilly</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+14678219025</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93fffaffffead3f6ebf2fee3fff6bdf0fcfe">[email&#160;protected]</a></td>
                                    <td>Store Keeper</td>
                                    <td>16 Mar 2023</td>
                                    <td><span class="badge badge-linedanger">Inactive</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ asset('backend/assets/img/users/user-19.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Freda</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+10913278319</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5c3d7c0c1c4e5c0ddc4c8d5c9c08bc6cac8">[email&#160;protected]</a></td>
                                    <td>Purchase</td>
                                    <td>29 Mar 2023</td>
                                    <td><span class="badge badge-linedanger">Inactive</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ asset('backend/assets/img/users/user-20.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Alwin</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+19125852947</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="553439223c3b15302d34382539307b363a38">[email&#160;protected]</a></td>
                                    <td>Delivery Biker</td>
                                    <td>03 Apr 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ asset('backend/assets/img/users/user-06.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Maybelle</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+13671835209</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a1ccc0d8c3c4cdcdc4e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</a></td>
                                    <td>Maintenance</td>
                                    <td>13 Apr 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img bg-img">
                                                <img src="{{ asset('backend/assets/img/users/user-21.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Ellen</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+19756194733</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="65000909000b25001d04081509004b060a08">[email&#160;protected]</a></td>
                                    <td>Quality Analyst</td>
                                    <td>17 May 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="userimgname">
                                            <a href="javascript:void(0);" class="userslist-img">
                                                <img src="{{ asset('backend/assets/img/users/user-22.jpg') }}" alt="product">
                                            </a>
                                            <div>
                                                <a href="javascript:void(0);">Grace</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>+19167850925</td>
                                    <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="117663707274517469707c617d743f727e7c">[email&#160;protected]</a></td>
                                    <td>Accountant</td>
                                    <td>21 May 2023</td>
                                    <td><span class="badge badge-linesuccess">Active</span></td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2 mb-0" data-bs-toggle="modal" data-bs-target="#edit-units">
                                                <i data-feather="edit" class="feather-edit"></i>
                                            </a>
                                            <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="trash-2" class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
