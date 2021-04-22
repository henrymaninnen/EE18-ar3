function smoothScroll(target,duration) {
    var target = document.querySelector(target);
    var targetPos = target.getBoundingClientRect().top;

    console.log(target);
}

smoothScroll('.questions', 1000);