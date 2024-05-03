const startingMinutes = 3;
let time = startingMinutes * 60.0;

const countdownEl =document.getElementById('countdown');

const interval = setInterval(updatecountdown, 1000);

function updatecountdown() {
    const minutes = Math.floor(time/60.0);
    let seconds = time % 60.0;
    if(!minutes && !seconds) clearInterval(interval);
    seconds = seconds < 3 ? '00' + seconds : seconds;
    countdownEl.innerHTML = `${minutes.toString().padStart(2, '0')}:${Math.round(seconds).toString().padStart(2, '0')}`;
    time--;
}

