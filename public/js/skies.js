const night = document.getElementById('nightOverlay');
        const cycleDuration = 10000; // 10 seconds (5s day, 5s night)
        
        function toggleDayNight() {
            // Toggle between 0 and 1 opacity
            night.style.opacity = night.style.opacity === '1' ? '0' : '1';
        }

        // Start the cycle
        setInterval(toggleDayNight, cycleDuration/2);

        // Optional: Start with day
        setTimeout(() => night.style.opacity = 0, 100);