(function () {
  //===== Prealoder

  window.onload = function () {
    window.setTimeout(fadeout, 500);
    setFooterDate();
  };

  function fadeout() {
    document.querySelector(".preloader").style.opacity = "0";
    document.querySelector(".preloader").style.display = "none";
  }

  /*=====================================
    Sticky
    ======================================= */
  window.onscroll = function () {
    const header_navbar = document.querySelector(".navbar-area");
    const sticky = header_navbar.offsetTop;
    const logo = document.querySelector(".navbar-brand img");

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
      logo.src = "assets/img/logo/logo-2.svg";
    } else {
      header_navbar.classList.remove("sticky");
      logo.src = "assets/img/logo/logo.svg";
    }

    // show or hide the back-top-top button
    const backToTo = document.querySelector(".scroll-top");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTo.style.display = "flex";
    } else {
      backToTo.style.display = "none";
    }
  };

  // for menu scroll
  const pageLink = document.querySelectorAll(".page-scroll");

  pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector(elem.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  });

  // section menu active
  function onScroll(event) {
    const sections = document.querySelectorAll(".page-scroll");
    const scrollPos =
      window.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop;

    for (let i = 0; i < sections.length; i++) {
      const currLink = sections[i];
      const val = currLink.getAttribute("href");
      const refElement = document.querySelector(val);
      const scrollTopMinus = scrollPos + 73;
      if (
        refElement.offsetTop <= scrollTopMinus &&
        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      ) {
        document.querySelector(".page-scroll").classList.remove("active");
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    }
  }

  window.document.addEventListener("scroll", onScroll);

  //===== close navbar-collapse when a  clicked
  let navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  document.querySelectorAll(".page-scroll").forEach((e) =>
    e.addEventListener("click", () => {
      navbarToggler.classList.remove("active");
      navbarCollapse.classList.remove("show");
    })
  );
  navbarToggler.addEventListener("click", function () {
    navbarToggler.classList.toggle("active");
  });

  // WOW active
  new WOW().init();
})();

// Initialize Hero Section Swiper
  const heroSwiper = new Swiper('.hero-swiper', {
  direction: 'horizontal',
  loop: true,
  pagination: {
    el: '.hero-swiper-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 10000, // Autoplay delay in milliseconds
    disableOnInteraction: true, // Disable autoplay when user interacts with the slider
  },
  // navigation: {
  //   nextEl: '.hero-swiper-button-next',
  //   prevEl: '.hero-swiper-button-prev',
  // },
  // scrollbar: {
  //   el: '.hero-swiper-scrollbar',
  // },
});

// Initialize Clients Section Swiper
const clientsSwiper = new Swiper('.clients-slider', {
  loop: true,
  autoplay: {
    delay: 3000, // 3 seconds delay between slides
    disableOnInteraction: false,
  },
  // pagination: {
  //   el: '.clients-swiper-pagination',
  //   clickable: true,
  // },
  // navigation: {
  //   nextEl: '.clients-swiper-button-next',
  //   prevEl: '.clients-swiper-button-prev',
  // },
  // scrollbar: {
  //   el: '.clients-swiper-scrollbar',
  // },
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 40,
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 50,
    },
  },
});


const setFooterDate = ()=>{
  var currentDate = new Date();
  var currentYear = currentDate.getFullYear();
  var copyrightText = "Copyright © " + currentYear + " CNB. All rights reserved.";
  document.querySelector('.copyrights').innerHTML = copyrightText;
  
}

document.getElementById('subscribe-form').addEventListener('submit', function(e) {
  e.preventDefault(); 
  openModal(e); 
});

function openModal(event) {
  event.preventDefault();
  const email = document.getElementById('subs-email').value;
  document.getElementById('modal-email').value = email;
  document.getElementById('contactModal').style.display = 'block';
}

function closeModal() {
  document.getElementById('contactModal').style.display = 'none';
}

function submitForm(event) {
  event.preventDefault();

  const submitButton = document.querySelector('#contact-form button');
  const buttonText = submitButton.querySelector('span:not(.spinner)');
  const spinner = submitButton.querySelector('.spinner');
  const messageDiv = document.getElementById('message');

  if (buttonText) {
    buttonText.style.display = 'none';
  }
  if (spinner) {
    spinner.style.display = 'inline-block';
  }
  submitButton.disabled = true;

  const name = document.getElementById('name').value;
  const email = document.getElementById('modal-email').value;
  const comments = document.getElementById('comments').value;

  fetch('contact-us.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams({
          'name': name,
          'modal-email': email,
          'comments': comments
      })
  })
  .then(response => response.text().then(text => ({ text, ok: response.ok })))
  .then(({ text, ok }) => {
      messageDiv.innerHTML = '<p class="text-white">' + text + '</p>';

      // Clear the forms if submission is successful
      if (ok) {
          document.getElementById('contact-form').reset();
          document.getElementById('subscribe-form').reset();
          closeModal();
      }
  })
  .catch(error => {
      messageDiv.innerHTML = '<p class="text-white">An error occurred. Please try again later.</p>';
  })
  .finally(() => {
      
      if (buttonText) {
        buttonText.style.display = 'inline';
      }
      if (spinner) {
        spinner.style.display = 'none';
      }
      submitButton.disabled = false;
  });
}


window.onclick = function(event) {
  if (event.target == document.getElementById('contactModal')) {
    closeModal();
  }
}
