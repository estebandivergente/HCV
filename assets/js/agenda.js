document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      locale: 'esLocale',
      events: [
        {title: 'Cita 1', start: '2022-04-12', end: '2022-04-12'},
        {title: 'Cita 2', start: '2022-04-16', end: '2022-04-16'},
        {title: 'Cita 3', start: '2022-04-20', end: '2022-04-20'},
      ]
    });
    calendar.render();
  });
