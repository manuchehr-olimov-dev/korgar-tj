// INDEX_BACKGROUND
const backgroundContainer = document.getElementsByClassName('.searchJob');
const availableBackground = []

// TOOLTIPS
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))