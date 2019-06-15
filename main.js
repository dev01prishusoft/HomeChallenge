function scrollDown(){
    articles.forEach( el => el.classList.add("scroll-articles"))
    nextBtn.classList.add("disabled")
    prevBtn.classList.remove("disabled")
}

function scrollUp(){
    articles.forEach( el => el.classList.remove("scroll-articles"))
    nextBtn.classList.remove("disabled")
    prevBtn.classList.add("disabled")
}


const articles = document.querySelectorAll(".blog-content .sidebar .side-content .articles")
const prevBtn = document.querySelector(".prev-btn")
prevBtn.addEventListener("click", scrollUp)
const nextBtn = document.querySelector(".next-btn")
nextBtn.addEventListener("click", scrollDown)