var mapToggle = false;
var storageToggle = false;
const speed = 50; // units per minute
let countdownInterval = null;

function toggleMap() {
    const map = document.querySelector('.map');
    const storage = document.querySelector('.storage');

    if (!mapToggle) {
        console.log('Showing map');
        map.style.display = 'flex';
        storage.style.display = 'none';
        mapToggle = true;
        storageToggle = false;
    } else {
        console.log('Hiding map');
        map.style.display = 'none';
        mapToggle = false;
    }
}

function toggleStorage() {
    const map = document.querySelector('.map');
    const storage = document.querySelector('.storage');

    if (!storageToggle) {
        console.log('Showing storage');
        storage.style.display = 'flex';
        map.style.display = 'none';
        storageToggle = true;
        mapToggle = false;
    } else {
        console.log('Hiding storage');
        storage.style.display = 'none';
        storageToggle = false;
    }
}

function moveToIsland(islandID, islandName) {
    const islandButton = document.getElementById(`island-${islandID}`);
    const timerDiv = document.querySelector('.distance-timer');
    const destinationEl = document.getElementById('island-destination');
    const timeEl = document.getElementById('distance-time');
    const map = document.querySelector('.map');

    console.log('Hiding map');
    map.style.display = 'none';
    mapToggle = false;

    if (!islandButton) {
        console.error(`Island button with ID ${islandID} not found`);
        return;
    }

    const distance = parseInt(islandButton.value);
    if (isNaN(distance)) {
        console.error(`Invalid distance for island ${islandID}`);
        return;
    }

    const totalMinutes = distance / speed;
    let totalSeconds = Math.round(totalMinutes * 60);

    // Calculate initial time and display it right away
    const mins = Math.floor(totalSeconds / 60);
    const secs = totalSeconds % 60;
    timeEl.textContent = `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;

    // Set destination and show timer
    destinationEl.textContent = islandName;
    timerDiv.style.display = 'block';

    // Clear existing countdown
    if (countdownInterval) {
        clearInterval(countdownInterval);
    }

    countdownInterval = setInterval(() => {
        totalSeconds--;

        if (totalSeconds < 0) {
            clearInterval(countdownInterval);
            timeEl.textContent = "Arrived at destination";
            console.log(`Arrived at island ${islandID}`);

            setTimeout(() => {
                timerDiv.style.display = 'none';

                // Fetch buildings and animate island using jQuery
                showIsland(islandID);
            }, 3000);

            return;
        }

        const mins = Math.floor(totalSeconds / 60);
        const secs = totalSeconds % 60;
        timeEl.textContent = `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
    }, 1000);
}

function showIsland(islandID) {
    $.ajax({
        url: '/get-island-buildings',
        type: 'POST',
        data: {
            islandID: islandID,
            _token: $('meta[name="csrf-token"]').attr('content') // CSRF token from meta
        },
        success: function (buildings) {
            const $islandRow = $('.island-row');
            $islandRow.empty(); // Clear previous content

            buildings.forEach(function (building) {
                const $island = $(`
                    <div class="island">
                        <img src="images/islands/islands-grass-short.png" alt="Island" class="island-base">
                        <img src="images/buildings/${building.buildingName}" alt="${building.buildingName}" class="building">
                    </div>
                `);
                $islandRow.append($island);
            });

            // Reset transform to start off-screen
            $islandRow.css({
                transform: 'translateX(100%)'
            });

            // Force reflow (ensures transition)
            void $islandRow[0].offsetWidth;

            // Animate to center
            $islandRow.css({
                transform: 'translateX(-50%)'
            });
        },
        error: function (xhr, status, error) {
            console.error('AJAX error:', error);
        }
    });
}
