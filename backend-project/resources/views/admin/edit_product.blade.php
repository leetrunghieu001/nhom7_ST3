@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Update Product
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
                    @foreach ($edit_product as $key => $pro)
                    <form role="form" enctype="multipart/form-data" method="POST" action="{{URL::to('/update_product/'.$pro->product_id)}}" > <!--Them anh phai co enctype="multipart/form-data -->
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" name="product_name" value="{{$pro->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Price</label>
                            <input type="text" class="form-control" name="product_price" value="{{$pro->product_price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Product Image</label>
                            <input type="file" class="form-control" name="product_image">
                            <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="120" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Description</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_desc" id="ckeditor1">{{$pro->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Product Content</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="product_content" id="ckeditor">{{$pro->product_content}} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Display</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hide</option>
                                <option value="1">Show</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Product</label>
                            <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                @if($cate->category_id == $pro->category_id)
                                <option selected value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @else
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Brand Product</label>
                            <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key => $brand)
                                @if($brand->brand_id == $pro->brand_id)
                                <option selected value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                @else
                                <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="add_product" class="btn btn-info">Update</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>

    </div>
</div>

@endsection()
