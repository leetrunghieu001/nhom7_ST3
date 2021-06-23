@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List brand
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
            </div>
            <div class="col-sm-4">
            </div>
            <form action="{{URL::to('/search_brand')}}" method="POST" class="font-form" autocomplete="off">
                @csrf
                <div class="col-sm-3">
                    <span class="input-sm">Enter Brand Name to search</span>
                    <div class="input-group">
                        <input type="text" list="browsers" class="input-sm form-control" name="keywords_submit" placeholder="Search" required>
                        <!-- Datalist -->
                        <datalist id="browsers">
                            <!-- Các Option -->
                            @foreach($all_brands as $brand)
                            <option value="{{$brand->brand_name}}">
                            @endforeach
                        </datalist>
                        <span class="input-group-btn">
                            <input type="submit" value="Search" class="btn btn-default btn-sm">
                        </span>
                    </div>
                </div>
            </form>
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
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <!-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> -->
                        <th>Brand Name</th>
                        <th>Brand Image</th>
                        <th>Display</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_brand_product as $key => $brand_pro)
                    <tr>
                        <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                        <td>{{ $brand_pro->brand_name }}</td>
                        <td><img src="public/uploads/brand/{{ $brand_pro->brand_image }}" width="77"></td>
                        <td><span class="text-ellipsis">
                                @if($brand_pro->brand_status == 0)
                                    <a href="{{URL::to('/unactive_brand_product/'.$brand_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></a>
                                @else
                                    <a href="{{URL::to('/active_brand_product/'.$brand_pro->brand_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></a>
                                @endif

                            </span></td>
                        <td>
                            <a href="{{URL::to('/edit_brand_product/'.$brand_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete_brand_product/'.$brand_pro->brand_id)}}" 
                            class="active styling-edit" ui-toggle-class="">
                            
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <!-- <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small> -->
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <span>{!! $all_brand_product->render() !!}</span>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection()
