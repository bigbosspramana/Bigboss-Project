// Menunggu hingga seluruh halaman selesai dimuat
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    const bgHub1 = document.querySelector(".bg-hub1");
    const bgHub2 = document.querySelector(".bg-hub2");
    const bgHub3 = document.querySelector(".bg-hub3");
    const cv = document.querySelector(".cv");

    const bgHub1Position = bgHub1.offsetTop;
    const bgHub2Position = bgHub2.offsetTop;
    const bgHub3Position = bgHub3.offsetTop;

    if (window.scrollY >= bgHub3Position) {
        navbar.classList.add("scrolled");
        cv.classList.add("scrolled");
        navbar.classList.remove("scrolled1");
    } else if (window.scrollY >= bgHub2Position) {
        navbar.classList.remove("scrolled");
        cv.classList.remove("scrolled");
        navbar.classList.add("scrolled1");
    } else if (window.scrollY >= bgHub1Position) {
        navbar.classList.add("scrolled");
        cv.classList.add("scrolled");
        navbar.classList.remove("scrolled1");
    } else {
        navbar.classList.remove("scrolled");
        cv.classList.remove("scrolled");
        navbar.classList.remove("scrolled1");
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