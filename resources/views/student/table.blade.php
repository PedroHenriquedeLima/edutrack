<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Contato</th>
            <th scope="col">Agendamento</th>
            <th scope="col">Próximo Pagamento</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->student_name }}</td>
                <td>{{ $student->contact }}</td>
                <td>{{ $student->schedule_days . ' - ' . $student->schedule_time }}</td>
                <td><a href="{{ route('student.edit', $student->id) }}">{{ $student->payment_date }}</a></td>
                <td><a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary">Editar</td>
            </tr>
        @endforeach
    </tbody>

</table>

</div>
