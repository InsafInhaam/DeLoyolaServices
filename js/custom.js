console.log("loading customjs");

document.addEventListener("DOMContentLoaded", () => {
  const loadNonCriticalStyles = () => {
    const styles = [
      // "/assets/vendors/animate/animate.min.css",
      "/assets/vendors/animate/custom-animate.css",
      // "/assets/vendors/fontawesome/css/all.min.css",
      "/assets/vendors/jarallax/jarallax.css",
      "/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css",
      "/assets/vendors/nouislider/nouislider.min.css",
      "/assets/vendors/nouislider/nouislider.pips.css",
      "/assets/vendors/odometer/odometer.min.css",
      // "/assets/vendors/swiper/swiper.min.css",
      "/assets/vendors/brote-icons/style.css",
      "/assets/vendors/tiny-slider/tiny-slider.min.css",
      "/assets/vendors/reey-font/stylesheet.css",
      "/assets/vendors/owl-carousel/owl.carousel.min.css",
      "/assets/vendors/owl-carousel/owl.theme.default.min.css",
      "/assets/vendors/bxslider/jquery.bxslider.css",
      "/assets/vendors/bootstrap-select/css/bootstrap-select.min.css",
      "/assets/vendors/vegas/vegas.min.css",
      "/assets/vendors/jquery-ui/jquery-ui.css",
      // "/assets/vendors/timepicker/timePicker.css",
    ];

    styles.forEach((style) => {
      const link = document.createElement("link");
      link.rel = "stylesheet";
      link.href = themeDirectory + style;
      link.onload = () => console.log(`${style} loaded`);
      document.head.appendChild(link);
    });

    // Remove event listeners to prevent multiple executions
    document.removeEventListener("scroll", loadNonCriticalStyles);
    document.removeEventListener("mousemove", loadNonCriticalStyles);
    document.removeEventListener("touchstart", loadNonCriticalStyles);
  };

  // Attach event listeners
  document.addEventListener("scroll", loadNonCriticalStyles);
  document.addEventListener("mousemove", loadNonCriticalStyles);
  document.addEventListener("touchstart", loadNonCriticalStyles);
});

document.addEventListener("DOMContentLoaded", () => {
  let scriptsLoaded = false;

  const loadScriptsOnScroll = () => {
    if (scriptsLoaded) return;

    const scripts = [
      // "/assets/vendors/bootstrap/js/bootstrap.bundle.min.js",
      "/assets/vendors/jarallax/jarallax.min.js",
      "/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js",
      "/assets/vendors/jquery-appear/jquery.appear.min.js",
      "/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js",
      "/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js",
      "/assets/vendors/jquery-validate/jquery.validate.min.js",
      "/assets/vendors/nouislider/nouislider.min.js",
      "/assets/vendors/odometer/odometer.min.js",
      // "/assets/vendors/swiper/swiper.min.js",
      "/assets/vendors/tiny-slider/tiny-slider.min.js",
      "/assets/vendors/wnumb/wNumb.min.js",
      "/assets/vendors/wow/wow.js",
      "/assets/vendors/isotope/isotope.js",
      "/assets/vendors/countdown/countdown.min.js",
      "/assets/vendors/owl-carousel/owl.carousel.min.js",
      "/assets/vendors/bxslider/jquery.bxslider.min.js",
      "/assets/vendors/bootstrap-select/js/bootstrap-select.min.js",
      "/assets/vendors/vegas/vegas.min.js",
      "/assets/vendors/jquery-ui/jquery-ui.js",
      // "/assets/vendors/timepicker/timePicker.js",
      // "/assets/vendors/circleType/jquery.circleType.js",
      // "/assets/vendors/circleType/jquery.lettering.min.js",
      "/assets/js/brote.js"
    ];

    scripts.forEach((src) => {
      const script = document.createElement("script");
      script.src = themeDirectory + src;
      script.defer = true; // Defer loading
      script.onload = () => console.log(`${src} loaded`);
      document.body.appendChild(script);
    });

    scriptsLoaded = true;
    document.removeEventListener("scroll", loadScriptsOnScroll);
  };

  // Attach event listener
  document.addEventListener("scroll", loadScriptsOnScroll, { once: true });
});


// menu js code

function dynamicCurrentMenuClass(selector) {
  let fileName = window.location.href.split("/").reverse()[0];
  let listItems = selector.querySelectorAll("li");

  listItems.forEach(function (li) {
    let anchor = li.querySelector("a");
    if (anchor && anchor.getAttribute("href") === fileName) {
      li.classList.add("current");
    }
  });

  listItems.forEach(function (li) {
    if (li.querySelector(".current")) {
      li.classList.add("current");
    }
  });

  if (fileName === "") {
    listItems[0].classList.add("current");
  }
}

let mainMenuList = document.querySelector(".main-menu__list");
if (mainMenuList) {
  dynamicCurrentMenuClass(mainMenuList);
}

let sidebarServiceList = document.querySelector(".service-details__sidebar-service-list");
if (sidebarServiceList) {
  dynamicCurrentMenuClass(sidebarServiceList);
}

if (mainMenuList && document.querySelector(".mobile-nav__container")) {
  document.querySelector(".mobile-nav__container").innerHTML = mainMenuList.outerHTML;
}

if (document.querySelector(".sticky-header__content")) {
  document.querySelector(".sticky-header__content").innerHTML = document.querySelector(".main-menu").innerHTML;
}

if (document.querySelector(".mobile-nav__container .main-menu__list")) {
  let dropdownAnchors = document.querySelectorAll(".mobile-nav__container .main-menu__list .dropdown > a");

  dropdownAnchors.forEach(function (anchor) {
    let toggleBtn = document.createElement("BUTTON");
    toggleBtn.setAttribute("aria-label", "dropdown toggler");
    toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
    anchor.appendChild(toggleBtn);

    toggleBtn.addEventListener("click", function (e) {
      e.preventDefault();
      toggleBtn.classList.toggle("expanded");
      anchor.parentElement.classList.toggle("expanded");
      let subMenu = anchor.parentElement.querySelector("ul");
      if (subMenu) {
        subMenu.style.display = subMenu.style.display === "block" ? "none" : "block";
      }
    });
  });
}

if (jQuery(".mobile-nav__toggler").length) {
  jQuery(".mobile-nav__toggler").on("click", function (e) {
    e.preventDefault();
    jQuery(".mobile-nav__wrapper").toggleClass("expanded");
    jQuery("body").toggleClass("locked");
  });
}

let searchToggler = document.querySelector(".search-toggler");
if (searchToggler) {
  searchToggler.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(".search-popup").classList.toggle("active");
    document.querySelector(".mobile-nav__wrapper").classList.remove("expanded");
    document.body.classList.toggle("locked");
  });
}

