document.addEventListener('DOMContentLoaded', () => {

    const form = document.getElementById('add-student-form');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = document.getElementById('student_name').value;
        const contact = document.getElementById('contact').value;
        const schedule_days = document.getElementById('schedule_days').value;
        const schedule_time = document.getElementById('schedule_time').value;
        const payment_date = document.getElementById('payment_date').value;
        
        if (name === '' || contact === '' || schedule_days === '' || schedule_time === '' || payment_date === '') {
            alert('Por favor, preencha todos os campos.');
            return;
        } else {
            form.submit();
        }

    });
});