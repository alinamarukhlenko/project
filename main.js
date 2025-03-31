import { Calendar } from './calendar.module.js';

const calendar = new Calendar({
    appendTo: 'app',
    resources: [
        {
            id: 1,
            name: 'Default Calendar',
            eventColor: 'green'
        }
    ],
    events: [
        {
            id: 1,
            name: 'Meeting',
            startDate: '2022-01-01T10:00:00',
            endDate: '2022-01-01T11:00:00',
            resourceId: 1
        }
    ]
});

// Функция для добавления событий
function addEvent() {
    const newEvent = {
        id: Date.now(), // Уникальный идентификатор
        name: prompt('Введите название события:'),
        startDate: prompt('Введите дату и время начала (YYYY-MM-DDTHH:MM:SS):'),
        endDate: prompt('Введите дату и время окончания (YYYY-MM-DDTHH:MM:SS):'),
        resourceId: 1
    };
    
    calendar.addEvent(newEvent); // Добавление события в календарь
}

// Функция для удаления события
function removeEvent(eventId) {
    calendar.removeEvent(eventId); // Удаление события из календаря
}

// Обработчик событий для добавления
calendar.on('dblclick', (event) => {
    if (event && event.date) {
        addEvent();
    }
});

// Обработчик событий для удаления
calendar.on('eventClick', (event) => {
    if (event && event.event) {
        const confirmDelete = confirm('Вы уверены, что хотите удалить это событие?');
        if (confirmDelete) {
            removeEvent(event.event.id);
        }
    }
});
