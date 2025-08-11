// Run the checkHeader function every time you scroll
window.addEventListener('scroll', checkHeader);

// This function will run a throttled script every 300 ms
var checkHeader = _.throttle(() => { 
    // Run JavaScript stuff here
}, 300);

// Detect scroll position
let scrollPosition = Math.round(window.scrollY);

// If we've scrolled 100px, add "sticky" class to the header
if (scrollPosition > 100){
    document.querySelector('header').classList.add('sticky');
}
// If not, remove "sticky" class from header
else {
    document.querySelector('header').classList.remove('sticky');
}