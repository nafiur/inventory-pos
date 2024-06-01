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
                    <h4>Product List</h4>
                    <h6>Manage your products</h6>
                </div>
            </div>
            <ul class="table-top-head">
                <li>
                    <div class="page-btn">
                        <a href="product-list.html" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Product</a>
                    </div>
                </li>
                <li>
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
                </li>
            </ul>
        </div>
        <div class="card">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Store</label>
                            <select class="select">
                                <option>Choose</option>
                                <option>Thomas</option>
                                <option>Rasmussen</option>
                                <option>Fred john</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Warehouse</label>
                            <select class="select">
                                <option>Choose</option>
                                <option>Legendary</option>
                                <option>Determined</option>
                                <option>Sincere</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Product Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="input-blocks add-product list">
                            <label>SKU</label>
                            <input type="text" class="form-control list" placeholder="Enter SKU">
                            <button type="submit" class="btn btn-primaryadd">
                                Generate Code
                            </button>
                        </div>
                    </div>
                </div>
                <div class="addservice-info">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="mb-3 add-product">
                                <div class="add-newplus">
                                    <label class="form-label">Category</label>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-category"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
                                            New</span></a>
                                </div>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Lenovo</option>
                                    <option>Electronics</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="mb-3 add-product">
                                <label class="form-label">Sub Category</label>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Lenovo</option>
                                    <option>Electronics</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="mb-3 add-product">
                                <label class="form-label">Sub Sub Category</label>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Fruits</option>
                                    <option>Computers</option>
                                    <option>Shoes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-product-new">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="mb-3 add-product">
                                <div class="add-newplus">
                                    <label class="form-label">Brand</label>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-units-brand"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add New</span></a>
                                </div>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Nike</option>
                                    <option>Bolt</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="mb-3 add-product">
                                <div class="add-newplus">
                                    <label class="form-label">Unit</label>
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-unit"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add New</span></a>
                                </div>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Kg</option>
                                    <option>Pc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="mb-3 add-product">
                                <label class="form-label">Selling Type</label>
                                <select class="select">
                                    <option>Choose</option>
                                    <option>Transactional selling</option>
                                    <option>Solution selling</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                            <label class="form-label">Barcode Symbology</label>
                            <select class="select">
                                <option>Choose</option>
                                <option>Code34</option>
                                <option>Code35</option>
                                <option>Code36</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="input-blocks add-product list">
                            <label>Item Code</label>
                            <input type="text" class="form-control list" placeholder="Please Enter Item Code">
                            <button type="submit" class="btn btn-primaryadd">
                                Generate Code
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="input-blocks summer-description-box transfer mb-3">
                        <label>Description</label>
                        <textarea class="form-control h-100" rows="5"></textarea>
                        <p class="mt-1">Maximum 60 Characters</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
