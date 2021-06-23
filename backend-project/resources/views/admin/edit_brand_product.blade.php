@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Edit Brand Product
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
                @foreach ($edit_brand_product as $key => $edit_value)
                <div class="position-center">
                    <form enctype="multipart/form-data" role="form" method="POST" action="{{URL::to('/update_brand_product/'.$edit_value->brand_id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Name</label>
                            <input type="text" class="form-control" value="{{ $edit_value->brand_name}}" name="brand_product_name" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Image</label>
                            <input type="file" class="form-control" name="brand_product_image">
                            <img src="{{URL::to('public/uploads/brand/'.$edit_value->brand_image)}}" width="77" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Brand Description</label>
                            <textarea style="resize: none;" rows="5" class="form-control" name="brand_product_desc" 
                            id="exampleInputPassword1">{{ $edit_value->brand_desc}}</textarea>
                        </div>
                        <button type="submit" name="update_brand_product" class="btn btn-info">Update brand</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>

@endsection()
