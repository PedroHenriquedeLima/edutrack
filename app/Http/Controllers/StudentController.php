<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function index(int $status)
    {

        // Listando ativos ou inativos

        $students = DB::table('students')->get()->where('user_id', auth()->user()->id)->where('is_active', $status);

        return view('student.list', ['students' => $students])->with('status', $status);
    }


    public function create()
    {
        return view('student.add');
    }

    public function store(Request $request)
    {
        // Obtendo id do usuário

        $user_id = Auth::user()->id;

        $request->validate([
            'student_name' => 'required',
            'contact' => 'required',
            'schedule_days' => 'required',
            'schedule_time' => 'required',
            'payment_date' => 'required',
        ]);

        $student = Student::create([
            'student_name' => $request->student_name,
            'contact' => $request->contact,
            'schedule_days' => $request->schedule_days,
            'schedule_time' => $request->schedule_time,
            'payment_date' => $request->payment_date,
            'user_id' => $user_id
        ]);


        return redirect()->route('home')->with('success', 'Aluno criado com sucesso!');
    }

    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }

    public function destroy()
    {

    }

    
}
