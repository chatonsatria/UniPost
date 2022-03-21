//horizontal scrolling **
// Declaring variable to target a div element
const mouseWheel = document.querySelector('.box-scroll');

// Add wheel function
mouseWheel.addEventListener('wheel', function (e) {

    const race = 40; // <= set scroll mouse move the wheels

    if (e.deltaY > 0) // <= Scroll right
        mouseWheel.scrollLeft += race;
    else // Scroll left
        mouseWheel.scrollLeft -= race;
    e.preventDefault();
    //** horizontal scrolling
});
