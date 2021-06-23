<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //Thêm Comment
    public function AddNewComment(Request $request)
    {
        //Bắt các thông tin 
        $comment_content =  $request->comment_content;
        $comment_rating = $request->comment_rating;
        $product_id = $request->product_id;
        $custommer_id = $request->customer_id;
        //Thực hiện thêm dữ liệu mới nhận vào database
        DB::table('tbl_comment')->insert(
            [
                'comment_content' => $comment_content,
                'comment_rating' => $comment_rating,
                'product_id' => $product_id,
                'customer_id' => $custommer_id
            ]
        );
        //Bắt tất cả các comment để tính sao trung bình
        $comments = DB::table('tbl_comment')->where('product_id',$product_id)->get();
        $num = $this->getAverageRating($comments);
        //Cập nhật lại sao cho sản phẩm
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_star_rating' => $num]);
        return redirect('details_product/' . $product_id);
    }
    //Xoá Comment
    public function DeleteComment($comment_id, $product_id)
    {
        //Truy vấn Comment theo id  và xoá comment
        DB::table('tbl_comment')->where('comment_id', $comment_id)->delete();
        //Bắt tất cả comment của sản phẩm đó lại
        $comments = DB::table('tbl_comment')->where('product_id',$product_id)->get();
        $num = $this->getAverageRating($comments);
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_star_rating' => $num]);
        return redirect('details_product/' . $product_id);
    }
    //Hàm tính sao trung bình
    private function getAverageRating($list_comment)
    {
        if (count($list_comment) == 0) {
            return 5;
        }
        $num = 0;
        foreach ($list_comment as $comment) {
            $num += $comment->comment_rating;
        }
        return round($num / count($list_comment));
    }
}
