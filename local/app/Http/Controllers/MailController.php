<?phpnamespace App\Http\Controllers;use App\Mail\SendingMailToCustomer;use App\Mail\SendingPhoneToMe;use Illuminate\Http\Request;use Illuminate\Support\Facades\Mail;use App\Mail\SendingMailToMe;use Illuminate\Support\Facades\Validator;class MailController extends Controller{    public function send(Request $request){        $validator = Validator::make($request->all(), [            'name' => 'required',            'email'=>'required|email',            'keyword'=>'required'        ],[            'name.required' => 'Mời Quý Khách Nhập Tên Liên Hệ',            'email.required' => 'Mời Quý Khách Nhập Email',            'email.email' => 'Mời Quý Khách Nhập Nhập Đúng Định Dạng Email',            'keyword.required' => 'Xin Vui Lòng Nhập Thông Tin Báo Giá',        ]);        if ($validator->fails()) {            return response()->json([                'success' => false,                'validator'=>$validator->errors()            ]);        }        Mail::send(new SendingMailToMe());        Mail::send(new SendingMailToCustomer());        return response()->json([            'success' => true        ]);    }    public function sendPhone(Request $request){        $validator = Validator::make($request->all(), [            'phone' => 'required',        ],[            'phone.required' => 'Mời Quý Khách Nhập Tên Liên Hệ',        ]);        if ($validator->fails()) {            return response()->json([                'success' => false,                'validator'=>$validator->errors()            ]);        }        Mail::send(new SendingPhoneToMe());        return response()->json([            'success' => true        ]);    }}