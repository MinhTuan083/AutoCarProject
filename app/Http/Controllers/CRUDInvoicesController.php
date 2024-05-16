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
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:employees,email',
                'phone' => 'required|string|max:20',
                'address' => 'nullable|string',
                'sex' => 'required|in:male,female',
                'password' => 'required|string|min:6|confirmed',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            $employee = new Employee;
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->phone = $request->input('phone');
            $employee->address = $request->input('address');
            $employee->sex = $request->input('sex');
            $employee->password = Hash::make($request->input('password'));
    
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('employees', 'public');
                $employee->image = $imagePath;
            }
    
            $employee->save();
    
            return redirect()->route('viewEmp')->with('success', 'Nhân viên đã được thêm thành công!');
        }
    }
    
