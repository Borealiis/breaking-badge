
const progress = document.querySelectorAll('.progress-done');

//for(var i = 0; i < 10; i++){
setTimeout(() => {
    progress.style.width = progress.getAttribute('data-done') + '%';
    progress.style.opacity = 1;
}, 500)
//};
