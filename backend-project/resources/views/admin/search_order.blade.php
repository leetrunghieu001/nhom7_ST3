@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            List Orders
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <!-- <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button> -->
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <form action="{{URL::to('/search_order')}}" method="POST" class="font-form">
                    @csrf
                    <span class="input-sm">Enter Customer ID to search</span>
                    <div class="input-group">
                        <input type="number" class="input-sm form-control" name="keywords_submit" placeholder="Search" required>
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
                        <th>Order Name</th>
                        <th>Customer ID</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($search_order as $order)
                    <tr>
                        <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                        @foreach ($search_customer as $customer)
                        <td>{{ $customer->customer_name }}</td>
                        @endforeach
                        <td>{{ $order->customer_id }}</td>
                        <td>{{ $order->order_total }}</td>
                        <td>{{ $order->order_status }}</td>
                        <td>
                            <a href="{{URL::to('/view_order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
                                <i class="fa fa-pencil-square-o text-success text-active"></i>
                            </a>
                            <a onclick="return confirm('Are you sure to delete?')" href="{{URL::to('/delete_order/'.$order->order_id)}}" class="active styling-edit" ui-toggle-class="">
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
                    <small class="text-muted inline m-t-sm m-b-sm">Show {{count($search_order) }} </small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection()
