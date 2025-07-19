const fullTime = 86400;
let [hours, minutes, seconds] = window.serverTime.split(':').map(Number);
let serverSeconds = (hours * 3600) + (minutes * 60) + seconds;

let orbitAngle = 0;
let opacity = 0;

function dayNightCycle() {
    serverSeconds = (serverSeconds + 1) % fullTime; // Add 1 second per tick

    orbitAngle = (serverSeconds / fullTime) * 360;

    if (serverSeconds < 14400) { // 00:00 - 04:00 fully night
        opacity = 1;
    } else if (serverSeconds < 21600) { // 04:00 - 06:00 fade out night
        let fadeProgress = (serverSeconds - 14400) / 7200;
        opacity = 1 - fadeProgress;
    } else if (serverSeconds < 57600) { // 06:00 - 16:00 fully day
        opacity = 0;
    } else if (serverSeconds < 64800) { // 16:00 - 18:00 fade in night
        let fadeProgress = (serverSeconds - 57600) / 7200;
        opacity = fadeProgress;
    } else { // 18:00 - 00:00 fully night
        opacity = 1;
    }

    document.querySelector(".orbit").style.transform = `translate(-50%, -50%) rotate(${orbitAngle}deg)`;
    document.querySelector(".night").style.opacity = opacity;

    // Update display time every second
    let displayHours = Math.floor(serverSeconds / 3600);
    let displayMinutes = Math.floor((serverSeconds % 3600) / 60);
    let displaySeconds = serverSeconds % 60;

    let displayTime = 
        String(displayHours).padStart(2, '0') + ":" +
        String(displayMinutes).padStart(2, '0') + ":" +
        String(displaySeconds).padStart(2, '0');

    document.getElementById("serverTime").innerHTML = `<h4>${displayTime}</h4>`;
}

setInterval(dayNightCycle, 1000); // update every second
dayNightCycle(); // initial call
