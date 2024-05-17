<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\ChiNhanh;

use Illuminate\Support\Facades\Auth;

//Unknow
class CHiNhanhController extends Controller
{
    
  
    public function registration()
    {
        return view('crud_chiNhanh.registration');
    }


    

    public function ChiNhanhRegistration(Request $request) 
{ 
    $request->validate([ 
        'name' => 'required|string|max:255', 
        'diachi' => 'required|string|max:255',
        'phone' => 'required|string|max:15', 
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        'des' =>'required|string|max:255'
    ]); 
    
    $data = $request->all(); 

    // Xử lý việc lưu file ảnh và lấy đường dẫn đã lưu
    if ($request->hasFile('image')) {
        $data['image'] = $request->input('image',$request->file('image')->store(''));
        $request->file('image')->store('public');
    }
    //Nhớ chạy lệnh này trong cmder
    // php artisan storage:link
    $check = $this->create($data); 

    return redirect("listCN");
}

public function create(array $data) 
{ 
    $chiNhanh = new ChiNhanh();
    $chiNhanh->name = $data['name']; 
    $chiNhanh->diachi = $data['diachi']; 
    $chiNhanh->des = $data['des'];
    $chiNhanh->phone = $data['phone']; 
    $chiNhanh->image = $data['image'] ?? null; 
    $chiNhanh->save();
} 
   

   
    public function readChiNhanh(Request $request) {

        $user_id = $request->get('id');
        $user = ChiNhanh::find($user_id);

        return view('crud_chiNhanh.read', ['users' => $user]);
    }
    
    public function deleteChiNhanh(Request $request)
    {
        $user_id = $request->get('id');
        $user = ChiNhanh::find($user_id);
        
        $user = ChiNhanh::destroy($user_id);

        return redirect("listCN")->withSuccess("Dang co post");
    }


    /**
     * List of chi nhanh
     */
    public function listChiNhanh()
    {
        
            $users = ChiNhanh::paginate(1);
            return view('crud_chiNhanh.list', ['ChiNhanh' => $users]);
      
    }

    //Update user
    public function updateChiNhanh(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255', 
            'diachi' => 'required|string|max:255',
            'phone' => 'required|string|max:15', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'des' =>'required|string|max:255'
        ]);
    
        // Tìm kiếm người dùng
       
        $ChiNhanh = ChiNhanh::findOrFail($id);
        echo "aler(".$ChiNhanh.")";
        // Gán các giá trị mới cho người dùng
        $ChiNhanh->name = $request->input('name');
        $ChiNhanh->diachi = $request->input('diachi');
        $ChiNhanh->phone = $request->input('phone');
        $ChiNhanh->des = $request->input('des');
      
    
        // Kiểm tra và cập nhật ảnh đại diện nếu có
        if ($request->hasFile('image')) {
            $ChiNhanh->image = $request->input('image',$request->file('image')->store(''));
            $request->file('image')->store('public');
        }
    
        // Lưu thông tin người dùng vào cơ sở dữ liệu
        $ChiNhanh->save();
    
        return redirect("listCN")->withSuccess('User updated successfully');
    }
    
    public function editChiNhanh($id)
    {
        $user = ChiNhanh::findOrFail($id);
        return view('crud_chiNhanh.edit', compact('user')); //Đường dẫn đến template thư mục
    }

    
}
