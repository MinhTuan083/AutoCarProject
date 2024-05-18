<?php
    namespace App\Http\Controllers;
    
    use App\Models\Employee;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;    
    class CRUDEmployeeController extends Controller
    {
        public function listEmp()
    {
        $employees = Employee::orderBy('created_at', 'desc')->get();
        return view('crud-car.listEmployee', compact('employees'));
    }

    public function create()
    {
        return view('crud-car.addEmployee');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|regex:/^[\p{L} ]+$/u',// ràng buộc trường name chỉ được nhập chữ cai và không được nhập kí tự đặc biệt hoặc số
            'email' => 'required|email|regex:/@gmail\.com$/|unique:employees,email',// ràng buộc đuôi @gmail.com cho email của nhân viên
            'phone' => 'numeric|string|min:10|unique:employees,phone',// người dùng nhập chũ thì không thể lưu vào db ở trường này
            'address' => 'nullable|string',
            'sex' => 'required|in:male,female',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'email.regex' => 'Địa chỉ email phải kết thúc bằng @gmail.com.',// thông báo cho trường email
        ]);

        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->sex = $request->input('sex');
        $employee->password = Hash::make($request->input('password'));

      

        $employee->save();

        return redirect()->route('viewEmp')->with('success', 'Nhân viên đã được thêm thành công!');
    }
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('crud-car.editEmployee', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255|regex:/^[\p{L} ]+$/u',
            'email' => 'required|email|regex:/@gmail\.com$/' ,
            'phone' => 'required|string|min:10',
            'address' => 'nullable|string',
            'sex' => 'required|in:male,female',
            'password' => 'nullable|string|min:6|confirmed',
        ], [
            'email.regex' => 'Địa chỉ email phải kết thúc bằng @gmail.com.',// thông báo cho trường email
        ]);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->sex = $request->input('sex');

        if ($request->input('password')) {
            $employee->password = $request->input('password'); // Lưu trực tiếp không mã hóa
           // $employee->password = Hash::make($request->input('password'));mã hóa mật khẩu
        }

      

        $employee->save();
        

        return redirect()->route('viewEmp')->with('success', 'Thông tin nhân viên đã được cập nhật thành công!');
    }
    public function deleteEmp($id)
    {
        // Tìm và xoá loại xe dựa vào id
        $employee = Employee::findOrFail($id);
     

        $employee->delete();
        // Chuyển hướng về danh sách loại xe với thông báo thành công

        if (!$employee) {
            return redirect()->back()->with('error', 'Cartype not found');
        }
        return redirect()->route('viewEmp')->with('success', 'Nhân viên đã được xoá thành công');

    }
    }
    

