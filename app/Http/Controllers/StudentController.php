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

    public function payment(int $id)
    {

        $student = Student::find($id);

        $today = date('Y-m-d');

        if($today > $student->payment_date || $today == $student->payment_date) {

            $status_payment = 0; // Pagamento em atraso

        } else {

            $status_payment = 1; // Pagamento em dia

        }

        return view('student.payment')->with('student', $student)->with('status_payment', $status_payment);


    }

    public function updatePayment(int $id)
    {
        
        // Atualizando data de pagamento

        $student = DB::table('students')->find($id);
        if (!$student) {
            return redirect()->route('home')->with('error', 'Estudante não encontrado!');
        }
    
        try {
            // Atualizando data de pagamento
            $next_date = date('Y-m-d', strtotime('+1 month'));
    
            DB::table('students')
                ->where('id', $id)
                ->update(['payment_date' => $next_date]);   
    
            // Retornando para tela inicial com sucesso
            return redirect()->route('home')->with('success', 'Pagamento concluído com sucesso!');
        } catch (\Exception $e) {
            // Tratamento de erro
            return redirect()->route('home')->with('error', 'Erro ao atualizar pagamento!');
        }
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
