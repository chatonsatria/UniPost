const callback = function (entries) {
    entries.forEach((entry) => {
        console.log(entry);

        if (entry.isIntersecting) {
            entry.target.classList.add("animate-fadeIn");
        } else {
            entry.target.classList.remove("animate-fadeIn");
        }
    });
};

const observer = new IntersectionObserver(callback);

const targets = document.querySelectorAll(".js-show-on-scroll");
targets.forEach(function (target) {
    target.classList.add("opacity-0");
    observer.observe(target);
});

const test = function (fade) {
    fade.forEach((entry) => {
        console.log(entry);

        if (entry.isIntersecting) {
            entry.target.classList.add("animate-fadeInUp");
        } else {
            entry.target.classList.remove("animate-fadeInUp");
        }
    });
};
const tyer = new IntersectionObserver(test);
const ter = document.querySelectorAll(".scroll");
ter.forEach(function (target) {
    target.classList.add("opacity-0");
    tyer.observe(target);
});
