@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Add Category Product
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
                    <!-- Phải thêm enctype="multipart/form-data" mới truyền file lên Controller được -->
                    <form role="form" enctype="multipart/form-data" method="POST" action="{{URL::to('/save_category_product')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input required data-validation="length" data-validation-length="min1" data-validation-error-msg="Please enter category name" 
                            type="text" class="form-control" name="category_product_name" placeholder="Enter category name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Category Description</label>
                            <textarea style="resize: none;" required rows="5" class="form-control" name="category_product_desc" id="exampleInputPassword1" 
                            placeholder="Enter category description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category Image</label>
                            <input type="file" class="form-control" name="category_image" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Display</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Show</option>
                                <option value="1">Hide</option>
                            </select>
                        </div>
                        <button type="submit" name="add_category_product" class="btn btn-info">Add</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection()
