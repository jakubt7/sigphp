const spinnerWrapper = document.querySelector('.spinner-wrapper');

window.addEventListener('load', () => {
    spinnerWrapper.parentElement.removeChild(spinnerWrapper);
})