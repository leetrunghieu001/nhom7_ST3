@extends('admin_layout')
@section('admin_content')

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Customer Information
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Customer name</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_phone}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Shipping Information
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Shipper name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$shipping->shipping_name}}</td>
                        <td>{{$shipping->shipping_address}}</td>
                        <td>{{$shipping->shipping_phone}}</td>
                        <td>{{$shipping->shipping_note}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Orders Details
        </div>
        <!-- <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle">
                    <option value="0">Bulk action</option>
                    <option value="1">Delete selected</option>
                    <option value="2">Bulk edit</option>
                    <option value="3">Export</option>
                </select>
                <button class="btn btn-sm btn-default">Apply</button>
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <input type="text" class="input-sm form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div> -->
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
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total price</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_details as $value)
                    <tr>
                        <!-- <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td> -->
                        <td>{{$value->product_name}}</td>
                        <td>{{$value->product_sales_quantity}}</td>
                        <td>$ {{number_format($value->product_price)}}</td>
                        <td>$ {{number_format($value->product_price*$value->product_sales_quantity)}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th>Total: </th>
                        <td></td>
                        <td></td>
                        <td>$ {{$order->order_total}}</td>
                    </tr>
                    <form action="{{URL::to('/update_order/'.$value->order_id)}}" method="post">
                        @csrf
                        <tr>

                            <th>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Order Status: </label>
                                    <input type="text" class="form-control form-group" value="" name="order_status">
                                    <p><span style="color: black;">Order Status Now: </span><i>{{ $order->order_status }}</i></p>
                                </div>
                            </th>
                            <td>
                                <div class="done">
                                    <button type="submit" name="update_order" class="btn btn-info">Done</button>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                    </form>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection()