
/*Time function*/
function updateClock() {
    var now = new Date(), // current date
        months = ['Január', 'Február', 'Március', 'Április', 'Május', 'Június', 'Július', 'Augusztus', 'Szeptember', 'Október','November','December']; // you get the idea
        time = now.getHours() + ':' + now.getMinutes() + ':' + now.getSeconds(), // again, you get the idea

        // a cleaner way than string concatenation
        date =  [
                now.getFullYear(),
                months[now.getMonth()],
                now.getDate()].join(' ');

    // set the content of the element with the ID time to the formatted string
    document.getElementById('current_time').innerHTML = [time, date].join(' / ');

    // call this function again in 1000ms
    setTimeout(updateClock, 1000);
}
updateClock();
