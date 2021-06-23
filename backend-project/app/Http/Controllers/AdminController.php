<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin;

session_start();

class AdminController extends Controller
{
    //
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return redirect('dashboard');
        } else {
            return redirect('admin')->send();
        }
    }

    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        // Lấy các thông tin Router gửi lên
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        // Truy van du lieu
        $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first(); //First lay duy nhat
        // so sanh ket qua voi db neu co tra ve /dashboard
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return redirect('/dashboard');
        }
        // neu sai xuat ra thong bao va tra ve /admin login
        return redirect('/admin')->with('message', 'Wrong email or password !');
    }

    public function logout()
    {
        $this->AuthLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return redirect('/admin');
    }
}
