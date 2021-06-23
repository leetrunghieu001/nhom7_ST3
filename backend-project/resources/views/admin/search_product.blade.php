@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List Product
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
            </div>
            <div class="col-sm-4">
            </div>
            <form action="{{ url('search_product') }}" method="GET" class="font-form" autocomplete="off">
                @csrf
                <div class="col-sm-3">
                    <span class="input-sm">Enter Product Name to search</span>
                    <div class="input-group">
                        <input type="text" list="browsers" class="input-sm form-control" name="keywords_submit" placeholder="Enter Product Name to search" required>
                        <!-- Datalist -->
                        <datalist id="browsers">
                            <!-- Các Option -->
                            @foreach($all_product as $product)
                            <option value="{{$product->product_name}}">
                            @endforeach
                        </datalist>
                        <span class="input-group-btn">
                            <input type="submit" value="Search" class="btn btn-default btn-sm">
                        </span>
                    </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <?php
        //khai bao $message
        $message = Session::get('message');
        // neu co thi echo va gan $message = null
        if ($message) {
            echo '<div class="text-alert">' . $message . '</div>';
            Session::get('message', null);
        }
        ?>
        <h1 style="text-align: center;">We found <i style="color: rgb(232, 149, 253);">{{count($search_product)}}</i> products have keyword "{{$keywords}}"</h1>
        <table class="table table-striped b-t b-light">
            <thead>
                <tr>
                    <!-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> -->
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Product Image</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Show</th>
                    <th style="width:30px;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($search_product as $key => $pro)
                <tr>
                    <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                    <td>{{ $pro->product_name }}</td>
                    <td>{{ $pro->product_price }}</td>
                    <td><img src="public/uploads/product/{{ $pro->product_image }}" height="120" width="100"></td>
                    <td>{{ $pro->category_name }}</td>
                    <td>{{ $pro->brand_name }}</td>

                    <td><span class="text-ellipsis">
                            @if($pro->product_status == 0)
                            <a href="{{URL::to('/unactive_product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></a>
                            @else
                            <a href="{{URL::to('/active_product/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></a>
                            @endif

                        </span></td>
                    <td>
                        <a href="{{URL::to('/edit_product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                        </a>
                        <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete_product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                            <i class="fa fa-times text-danger text"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection()