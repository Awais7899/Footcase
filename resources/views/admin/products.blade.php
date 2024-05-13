@extends('admin.layouts.master')

@section('title')
    Footcase - Products
@endsection

@section('css')
@endsection

@section('content')
    <div class="d-flex flex-row justify-content-end">
        <button class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#fullscreenModal">Add
            product</button>
    </div>

    <div class="modal fade" id="fullscreenModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="addProduct" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class='d-flex row'>
                                <div class="mb-3 col-sm-4">
                                    <label for="inputText" class="col-sm-2 col-form-label">SKU</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="sku" name="sku"
                                            placeholder="Enter sku" required>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" name="price" id="price"
                                            placeholder="Enter price"required>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label for="inputText" class="col-sm-2 col-form-label">Size</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" name="size_no" id="size_no"
                                            placeholder="Enter size"required>
                                    </div>
                                </div>
                            </div>
                            <div class='d-flex row'>
                                <div class="mb-3  col-sm-4">
                                    <label class="col-sm-12 col-form-label">Categories</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="category_id" name="category_id"
                                            aria-label="Default select example" required>
                                            <option selected>Select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label class="col-sm-12 col-form-label">Sub categories</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="sub_categories_id" name="sub_categories_id"
                                            aria-label="Default select example" required>
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label class="col-sm-12 col-form-label">Brands</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" name="brands_id" id="brands_id"
                                            aria-label="Default select example" required>
                                            <option selected>Select brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class='d-flex row'>
                                <div class="mb-3  col-sm-4">
                                    <label class="col-sm-12 col-form-label">New Collection</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="new_collection" name="new_collection"
                                            aria-label="Default select example" required>
                                            <option selected>Select collection status</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-4">
                                    <label class="col-sm-12 col-form-label">Season</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="seasonability" name="seasonability"
                                            aria-label="Default select example" required>
                                            <option value="">Select season</option>
                                            <option value="yearly">Yearly</option>
                                            <option value="summer">Summer</option>
                                            <option value="winter">Winter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class='d-flex row'>
                                <div class="col-sm-4">
                                    <label for="inputPassword" class="col-sm-5 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="col-sm-12">
                                        <label for="inputNumber" class="col-sm-6 col-form-label">Image upload</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required name="product_image" type="file"
                                                id="product_image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>


    <div class="modal fade" id="fullscreenModalEditModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="addProduct" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class='d-flex row'>
                                <div class="mb-3 col-sm-4">
                                    <label for="inputText" class="col-sm-2 col-form-label">SKU</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="sku" name="sku"
                                            placeholder="Enter sku" required>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" name="price" id="price"
                                            placeholder="Enter price"required>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label for="inputText" class="col-sm-2 col-form-label">Size</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" name="size_no" id="size_no"
                                            placeholder="Enter size"required>
                                    </div>
                                </div>
                            </div>
                            <div class='d-flex row'>
                                <div class="mb-3  col-sm-4">
                                    <label class="col-sm-12 col-form-label">Categories</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="category_id" name="category_id"
                                            aria-label="Default select example" required>
                                            <option selected>Select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label class="col-sm-12 col-form-label">Sub categories</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="sub_categories_id" name="sub_categories_id"
                                            aria-label="Default select example" required>
                                            <option value="">Select Subcategory</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 col-sm-4">
                                    <label class="col-sm-12 col-form-label">Brands</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" name="brands_id" id="brands_id"
                                            aria-label="Default select example" required>
                                            <option selected>Select brand</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class='d-flex row'>
                                <div class="mb-3  col-sm-4">
                                    <label class="col-sm-12 col-form-label">New Collection</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="new_collection" name="new_collection"
                                            aria-label="Default select example" required>
                                            <option selected>Select collection status</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 col-sm-4">
                                    <label class="col-sm-12 col-form-label">Season</label>
                                    <div class="col-sm-12">
                                        <select class="form-select" id="seasonability" name="seasonability"
                                            aria-label="Default select example" required>
                                            <option value="">Select season</option>
                                            <option value="yearly">Yearly</option>
                                            <option value="summer">Summer</option>
                                            <option value="winter">Winter</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class='d-flex row'>
                                <div class="col-sm-4">
                                    <label for="inputPassword" class="col-sm-5 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="col-sm-12">
                                        <label for="inputNumber" class="col-sm-6 col-form-label">Image upload</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" required name="product_image" type="file"
                                                id="product_image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>


    <div class="modal fade" id="delateModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="deleteCategory">
                    <div class="modal-body">
                        @method('DELETE')
                        @csrf
                        <div class="mb-3">
                            <h5>Are you sure you want to delete the category?</h5>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            No
                        </button>
                        <button type="submit" class="btn btn-danger">
                            Yes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table id="product_table" class="display text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Sub Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Size</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
@endsection

@section('script')
@endsection
