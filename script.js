document.addEventListener('DOMContentLoaded', function() {
    // Получаем параметры из URL
    const urlParams = new URLSearchParams(window.location.search);
    const group = urlParams.get('group');
    const id = urlParams.get('id');

    if (group && id) {
        // Загружаем данные расписания с помощью AJAX или Fetch API
        // Пример использования Fetch API:
        fetch(`https://api.example.com/schedule?group=${group}&id=${id}`)
            .then(response => response.json())
            .then(data => {
                const scheduleDiv = document.getElementById('schedule');
                scheduleDiv.innerHTML = `<h2>Расписание для группы ${group}</h2>`;
                data.schedule.forEach(item => {
                    scheduleDiv.innerHTML += `<p>${item.day}: ${item.time} - ${item.subject}</p>`;
                });
            })
            .catch(error => {
                console.error('Error fetching schedule:', error);
            });
    }
});
