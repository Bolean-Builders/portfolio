// Loader
document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => {
        document.querySelector('.loader').classList.add('hidden');
    }, 1000); 
});
// Nav BAr
function showToggle(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'flex'
}

function closeToggle(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.style.display = 'none'
}