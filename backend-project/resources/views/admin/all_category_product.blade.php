@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List categories
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">

            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <form action="{{URL::to('/search_category')}}" method="POST" class="font-form" autocomplete="off">
                    @csrf
                    <span class="input-sm">Enter Name of Category to search</span>
                    <div class="input-group">
                        <input type="text" list="browsers" class="input-sm form-control" name="keywords_submit" placeholder="Search" required>
                         <!-- Datalist -->
                         <datalist id="browsers">
                            <!-- Các Option -->
                            @foreach($all_categories as $category)
                            <option value="{{$category->category_name}}">
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
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <!-- <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th> -->
                        <th>Category Name</th>
                        <th>Category Image</th>
                        <th>Display</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_category_product as $key => $cate_pro)
                    <tr>
                        <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                        <td>{{ $cate_pro->category_name }}</td>
                        <td><img src="public/uploads/category/{{ $cate_pro->category_image }}" width="77"></td>
                        <td><span class="text-ellipsis">
                                
                                @if($cate_pro->category_status == 0)
                                    <a href="{{URL::to('/unactive_category_product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></a> 
                                @else
                                    <a href="{{URL::to('/active_category_product/'.$cate_pro->category_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></a>
                                @endif

                            </span></td>
                        <td>
                            <a href="{{URL::to('/edit_category_product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete_category_product/'.$cate_pro->category_id)}}" 
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
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <span>{!! $all_category_product->render() !!}</span>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection()
