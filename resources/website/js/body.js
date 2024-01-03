window.addEventListener('DOMContentLoaded', function () {
      window.scrollTo(0, 0);
});

document.querySelector(".back-top").onclick = function () {
      topFunction();
};

function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
}


