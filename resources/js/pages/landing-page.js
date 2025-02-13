(function () {
    "use strict";

    // Background
    const backgroundMode = () => {
        if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
        ) {
            $(".background").first().addClass("background--hidden");
        } else {
            $(".background").first().removeClass("background--hidden");
        }
    };

    backgroundMode();
    window.onscroll = () => {
        backgroundMode();
    };
})();
