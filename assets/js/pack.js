// pack.js
document.addEventListener('DOMContentLoaded', function() {
    const ugBtn = document.getElementById('ug-btn');
    const pgBtn = document.getElementById('pg-btn');
    const ugSection = document.getElementById('ug-section');
    const pgSection = document.getElementById('pg-section');

    // Initial state: Show UG, hide PG
    ugSection.style.display = 'grid';
    pgSection.style.display = 'none';

    // Active class for buttons
    const activeClasses = 'bg-white text-primary border-2 border-primary shadow-md scale-105';
    const inactiveClasses = 'bg-transparent text-gray-600 border-2 border-transparent';

    ugBtn.classList.add(...activeClasses.split(' '));
    pgBtn.classList.add(...inactiveClasses.split(' '));

    ugBtn.addEventListener('click', function() {
        ugSection.style.display = 'grid';
        pgSection.style.display = 'none';
        ugBtn.classList.remove(...inactiveClasses.split(' '));
        ugBtn.classList.add(...activeClasses.split(' '));
        pgBtn.classList.remove(...activeClasses.split(' '));
        pgBtn.classList.add(...inactiveClasses.split(' '));
    });

    pgBtn.addEventListener('click', function() {
        ugSection.style.display = 'none';
        pgSection.style.display = 'grid';
        pgBtn.classList.remove(...inactiveClasses.split(' '));
        pgBtn.classList.add(...activeClasses.split(' '));
        ugBtn.classList.remove(...activeClasses.split(' '));
        ugBtn.classList.add(...inactiveClasses.split(' '));
    });
});