@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Product
            </header>
            <?php
            //khai bao $message
            $message = Session::get('message');
            // neu co thi echo va gan $message = null
            if ($message) {
                echo '<div class="text-alert">' . $message . '</div>';
                Session::get('message', null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" enctype="multipart/form-data" method="POST" action="{{URL::to('/save_product')}}" > <!--Them anh phai co enctype="multipart/form-data -->
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input required data-validation="length" data-validation-length="min1" data-validation-error-msg="Please enter product name" type="text" class="form-control" name="product_name" placeholder="Enter product name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input required data-validation="number" data-validation-length="min0" data-validation-error-msg="Please enter brand price" type="text" class="form-control" name="product_price" placeholder="Enter product price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label>
                            <input type="file" class="form-control" name="product_image">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Description</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_desc" id="ckeditor1" placeholder="Enter product description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Content</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_content" id="ckeditor" placeholder="Enter product content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Display</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Show</option>
                                <option value="1">Hide</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Product</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($category_product as $key => $cate)
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Brand Product</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key => $brand)
                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Add</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection()
