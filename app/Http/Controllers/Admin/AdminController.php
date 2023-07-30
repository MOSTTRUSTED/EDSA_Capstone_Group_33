<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Route;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Sections;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Category;
use Intervention\Image\Facades\Image;

class AdminController extends Controller

{
    // public function index()
    // {
    //     if (Auth::guard('admin')->check()) {
    //         $countProdut = Product::count();
    //         $countCustomer = Customer::count();
    //         $countOrder = Order::count();
    //         $countOrderPen = Order::where('status', '1')->count();
    //         $countOrderDeli = Order::where('status', '2')->count();
    //         $countOrderSus = Order::where('status', '3')->count();
    //         $countOrderCancel = Order::where('status', '4')->count();
    //         $proView = Product::select('id','name', 'view_count')->orderBy('view_count', 'DESC')->take(5)->get();

    //         $proRate = Product::select(
    //             'products.*',
    //             DB::raw('AVG(product_comment.rating) as rating'),
    //         )->leftjoin('product_comment', 'products.id', 'product_comment.product_id')->orderBy('rating', 'DESC')->take(5)->get();
            
    //         return view('admin.partials.dashboard', compact(
    //             'countProdut', 
    //             'countOrder', 
    //             'countCustomer', 
    //             'countOrder', 
    //             'countOrderSus', 
    //             'countOrderCancel', 
    //             'proView',
    //             'proRate',
    //             'countOrderPen',
    //             'countOrderDeli'
    //         ));
    //     }
    // }

    // public function fillter(Request $request)
    // {
    //     $data = $request->all();
    //     $from = Carbon::createFromFormat('d/m/Y', $data['from'])->format('Y-m-d');
    //     $to = Carbon::createFromFormat('d/m/Y', $data['to'])->format('Y-m-d');
    //     $get = Order::select(
    //         DB::raw('DATE(created_at) as date'),
    //         DB::raw('SUM(total) as total'),
    //     )->where('status', 3)->whereBetween('orders.created_at', [$from, $to])->groupBy(DB::raw('DATE(created_at)'))->get();

    //     $totalOd = Order::select(DB::raw('DATE(created_at) as dateOd'), DB::raw('COUNT(id) as qty'))->whereBetween('orders.created_at', [$from, $to])->groupBy(DB::raw('DATE(created_at)'))->get();

    //     $chartData = [];
    //     $chartDataOd = [];
    //     foreach ($get as $value) {
    //         $chartData[$value->date] = $value->total;
    //     }
    //     foreach($totalOd as $item ){
    //         $chartDataOd[$item->dateOd] = $item->qty;
    //     }

    //     $startDate1 = Carbon::parse($data['from']);
    //     $endDate1 = Carbon::parse($data['to']);
    //     $arrDate = [];
    //     $arrOder = [];
    //     $arrTotal = [];
    //     do {
    //         $index = $startDate1->format('Y-m-d');
    //         $arrDate[] = $index;
    //         $arrOder[] = isset($chartDataOd[$index])?$chartDataOd[$index]:0;
    //         $arrTotal[] = isset($chartData[$index])?$chartData[$index]:0;
    //     } while ($startDate1->add(1, 'day')->lte($endDate1));
    //     return response()->json(['order' => $arrOder, 'date' => $arrDate, 'total' => $arrTotal ]);
    // }

    // public function fillterWeek()
    // {
    //     $to = Carbon::now()->format('Y-m-d');
    //     $from = Carbon::now()->subDays(7)->format('Y-m-d');
    //     $get = Order::select(
    //         DB::raw('DATE(created_at) as date'),
    //         DB::raw('SUM(total) as total'),
    //     )->where('status', 3)->whereBetween('orders.created_at', [$from, $to])->groupBy(DB::raw('DATE(created_at)'))->get();

    //     $totalOd = Order::select(DB::raw('DATE(created_at) as dateOd'), DB::raw('COUNT(id) as qty'))->whereBetween('orders.created_at', [$from, $to])->groupBy(DB::raw('DATE(created_at)'))->get();

    //     $chartData = [];
    //     $chartDataOd = [];
    //     foreach ($get as $value) {
    //         $chartData[$value->date] = $value->total;
    //     }
    //     foreach($totalOd as $item ){
    //         $chartDataOd[$item->dateOd] = $item->qty;
    //     }

    //     $startDate1 = Carbon::parse($from);
    //     $endDate1 = Carbon::parse($to);
    //     $arrDate = [];
    //     $arrOder = [];
    //     $arrTotal = [];
    //     do {
    //         $index = $startDate1->format('Y-m-d');
    //         $arrDate[] = $index;
    //         $arrOder[] = isset($chartDataOd[$index])?$chartDataOd[$index]:0;
    //         $arrTotal[] = isset($chartData[$index])?$chartData[$index]:0;
    //     } while ($startDate1->add(1, 'day')->lte($endDate1));
    //     return response()->json(['order' => $arrOder, 'date' => $arrDate, 'total' => $arrTotal ]);
    // 

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
           
            
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'status' => 1])){
                return redirect('admin/dashboard');
            } else {
              return redirect()->back()->with('error_message', 'invalid email or password');
            }
        }
       return view('admin.login');
    }
    // update venor details

    public function updateVendorDetails($slug){
        if($slug=="personal"){

        }else if($slug=="business"){

        }else if($slug=="bank"){

        }
        return view('admin/settings/update_vendors_details')->with(compact('slug'));
    }




    

    public function dashboard(){
        return view('admin.dashboard');
    }
    // View store
    public function store()
    {
        $category = Category::all();
        return view('admin.store')->with(compact('category'));
    }

    public function storec(Request $request)
{
    

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $category = new Category();
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->save();

                    Category::make($category)->save();
                
            }

            Category::insert(['name' => $data['category_name'], 'description' => $data['description']]);

            return redirect()->back()->with('success_message' . 'category updated successfully!!');
        }



    // update Admin Password
    public function updateAdminPassword(){
      //  echo "<pre>"; print_r(Auth::guard('admin')->user()); die;
        $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.update_admin_password')->with(compact('adminDetails'));
    }

     // update Admin Details
    public function updateAdminDetails(Request$request){
        if($request->isMethod('post')){
            $data = $request->all();
           // echo "<pre>"; print_r($data); die;
           
           if($request->hasFile('admin_image')){
            $image_tmp = $request->file('admin_image');
            if($image_tmp->isValid()){
                // get extention
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate new image name

            $imageName = rand(111,99999).'.'.$extension;
            $imagePath = 'admin/public/'.$imageName;
            //upload image
            Image::make($image_tmp)->save($imagePath);
            }

           }
            
            Admin::where('id', Auth::guard('admin')->user()->id)->update(['name'=>$data['admin_name'], 'mobile'=>$data['admin_mobile'], 'image'=>$imageName]);
            
                return redirect()->back()->with('success_message'. 'Admin settings updated successfully!!');
            
            }
        return view('admin.settings.update_admin_details');
    }

    // Check Admin Password

    public function checkAdminPassword(Request $request){
        $data = $request->all();
       // echo "<pre>"; print_r($data); die;
       if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password )){
        return true;
       }else{
        return false;
       }

    }

    public function logout()
    {
       Auth::guard('admin')->logout();
         return redirect('admin/login');
    }
}
