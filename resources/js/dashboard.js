// Menunggu hingga seluruh halaman selesai dimuat
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const bgHub1 = document.querySelector(".bg-hub1");
    const cv = document.querySelector(".cv");
    const bgHub1Position = bgHub1.offsetTop;

    if (window.scrollY > bgHub1Position) {
        navbar.classList.add("scrolled"); // Menambahkan kelas 'scrolled' saat melewati bg-hub1
        cv.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled"); // Menghapus kelas 'scrolled' sebelum bg-hub1
        cv.classList.remove("scrolled");
    }
});

window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const bgHub2 = document.querySelector(".bg-hub2");
    const cv = document.querySelector(".cv");
    const bgHub2Position = bgHub2.offsetTop;

    if (window.scrollY > bgHub2Position) {
        navbar.classList.add("scrolled1"); // Menambahkan kelas 'scrolled' saat melewati bg-hub1
        cv.classList.add("scrolled1");
    } else {
        navbar.classList.remove("scrolled1"); // Menghapus kelas 'scrolled' sebelum bg-hub1
        cv.classList.remove("scrolled1");
    }
});

// Function to check if an element is in the viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

// Function to run the progress bar animation
function animateProgressBars() {
    const progressBars = document.querySelectorAll(".skills progress");
    
    progressBars.forEach(progress => {
        const max = parseInt(progress.getAttribute("value"), 10);
        let start = 0;

        const interval = setInterval(() => {
            start += 1;
            progress.value = start;

            if (start >= max) {
                clearInterval(interval);
            }
        }, 15); // Set animation duration
    });
}

// Main function to check scroll and start the animation
function handleScroll() {
    const skillsSection = document.querySelector(".skillss");

    // Check if any part of the skills section is in the viewport
    if (isElementInViewport(skillsSection)) {
        animateProgressBars();
        // Remove event listener to ensure animation only plays once
        window.removeEventListener("scroll", handleScroll);
    }
}

// Add the scroll event listener
window.addEventListener("scroll", handleScroll);