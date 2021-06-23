@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Category Product
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
                @foreach ($edit_category_product as $key => $edit_value)
                <div class="position-center">
                    <!-- Phải thêm enctype="multipart/form-data" thì mới Upload hình lên Controller được -->
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{URL::to('/update_category_product/'.$edit_value->category_id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" class="form-control" value="{{ $edit_value->category_name}}" name="category_product_name" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Image</label>
                            <input type="file" class="form-control" name="category_image">
                            <img src="{{URL::to('public/uploads/category/'.$edit_value->category_image)}}" width="77" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Description</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="category_product_desc" 
                            id="exampleInputPassword1">{{ $edit_value->category_desc}}</textarea>
                        </div>
                        <button type="submit" name="update_category_product" class="btn btn-info">Update category</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

@endsection()
