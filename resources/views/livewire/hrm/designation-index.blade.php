<div>
    @section('title')
    {{ 'Designation' }}
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
                    <a href="{{ route('create.unit') }}" wire:navigate class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add Designation</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table  datanew">
                                    <thead>
                                        <tr>
                                            <th class="no-sort">
                                                <label class="checkboxs">
                                                    <input type="checkbox" id="select-all">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </th>
                                            <th>Designation</th>
                                            <th>Members</th>
                                            <th>Created On</th>
                                            <th>Total Members</th>
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
                                            <td>Designer</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-08.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-13.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-09.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-11.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+3</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>07</td>
                                            <td>
                                                25 May 2023
                                            </td>
                                            <td><span class="badge badge-linesuccess">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>Curator</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-05.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-06.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-02.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+5</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>08</td>
                                            <td>
                                                27 June 2023
                                            </td>
                                            <td><span class="badge badge-linesuccess">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>System Administrator</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-09.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-08.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-11.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+2</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>06</td>
                                            <td>
                                                29 June 2023
                                            </td>
                                            <td><span class="badges-success">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>Administrative Officer</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-09.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-01.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+1</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>03</td>
                                            <td>
                                                15 July 2023
                                            </td>
                                            <td><span class="badges-success">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>Technician</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-05.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-02.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-01.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+2</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>05</td>
                                            <td>
                                                19 July 2023
                                            </td>
                                            <td><span class="badges-success">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>Office Support Secretary</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-07.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-11.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-09.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+5</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>09</td>
                                            <td>
                                                04 August 2023
                                            </td>
                                            <td><span class="badges-success">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>Tech Lead</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-12.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-13.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-01.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-04.jpg" alt><span>+6</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>10</td>
                                            <td>
                                                13 August 2023
                                            </td>
                                            <td><span class="badges-success">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
                                            <td>Database administrator</td>
                                            <td>
                                                <ul class="team-members">
                                                    <li>
                                                        <ul>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-11.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-07.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-02.jpg" alt></a>
                                                            </li>
                                                            <li>
                                                                <a href><img src="assets/img/users/user-11.jpg" alt><span>+1</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>04</td>
                                            <td>
                                                24 August 2023
                                            </td>
                                            <td><span class="badges-success">Active</span></td>
                                            <td class="action-table-data">
                                                <div class="edit-delete-action">
                                                    <a class="me-2 p-2" href="#">
                                                        <i data-feather="eye" class="feather-eye"></i>
                                                    </a>
                                                    <a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                    <a class="confirm-text p-2" href="javascript:void(0);">
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
    </div>
</div>
