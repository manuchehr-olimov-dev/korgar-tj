// INDEX_BACKGROUND
import bg_img_1 from "../css/img/bg-img-1.jpg"
import bg_img_2 from "../css/img/bg-img-2.jpg"
import bg_img_3 from "../css/img/bg-img-3.jpg"
import bg_img_4 from "../css/img/bg-img-4.jpg"
import bg_img_5 from "../css/img/bg-img-5.jpg"
const f = [
    bg_img_1,
    bg_img_2,
    bg_img_3,
    bg_img_4,
    bg_img_5
]
const elem = document.querySelector('.searchJob');
elem.style.backgroundImage = "url(" + f[Math.floor(Math.random() * 4)] +")"

console.log(bg_img_1)

// TOOLTIPS
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))