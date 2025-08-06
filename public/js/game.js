var mapToggle = false;
var storageToggle = false;

function toggleMap() {
    if (!mapToggle) {
        console.log('Showing map');
        const map = document.querySelector('.map');
        map.style.display = 'flex';
        mapToggle = true;
    }
    else {
        console.log('Hiding map');
        const map = document.querySelector('.map');
        map.style.display = 'none';
        mapToggle = false;
    }
}

function toggleStorage() {
    if (!storageToggle) {
        console.log('Showing storage');
        const storage = document.querySelector('.storage');
        storage.style.display = 'flex';
        storageToggle = true;
    }
    else {
        console.log('Hiding storage');
        const storage = document.querySelector('.storage');
        storage.style.display = 'none';
        storageToggle = false;
    }
}