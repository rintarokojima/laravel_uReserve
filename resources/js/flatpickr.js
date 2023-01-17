import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js"

flatpickr("#event_date", {
    "locale": Japanese ,
    minDate: "today",
    maxDate: new Date().fp_incr(30) 
});
flatpickr("#start_time", {
    "locale": Japanese ,
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
    minTime: "16:00",
    maxTime: "22:30",
});
flatpickr("#end_time", {
    "locale": Japanese ,
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    time_24hr: true,
    minTime: "16:00",
    maxTime: "22:30",
});