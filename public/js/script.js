document.addEventListener("DOMContentLoaded", function() {
  // Log Sign in
  const container = document.getElementById('container');
  const registerBtn = document.getElementById('register');
  const loginBtn = document.getElementById('login');

  registerBtn.addEventListener('click', () => {
      container.classList.add("active");
  });

  loginBtn.addEventListener('click', () => {
      container.classList.remove("active");
  });


  // scroll aware
  function selectElementByClass(className) {
      return document.querySelector(`.${className}`);
  }

  const sections = [
      selectElementByClass('sect1'),
      selectElementByClass('sect2'),
      selectElementByClass('sect3'),
      selectElementByClass('sect4'),
      selectElementByClass('sect5'),
  ];

  const navItems = {
      home: selectElementByClass('navsect1'),
      about: selectElementByClass('navsect2'),
      services: selectElementByClass('navsect3'),
      downloads: selectElementByClass('navsect4'),
      contact: selectElementByClass('navsect5'),
  };

  // intersection observer setup
  const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.7,
  };

  function observerCallback(entries, observer) {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              const navItem = navItems[entry.target.id];
              navItem.classList.add('activeNav');
              Object.values(navItems).forEach((item) => {
                  if (item != navItem) {
                      item.classList.remove('activeNav');
                  }
              });
          }
      });
  }

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  sections.forEach((sec) => observer.observe(sec));


});

// Page Setting
document.getElementById('profile-btn').addEventListener('click', function() {
    document.getElementById('profile-form').classList.remove('d-none');
    document.getElementById('profilePicture-form').classList.add('d-none');
    document.getElementsById('div-p').classList.add('setting-active');
    document.getElementsById('div-o').classList.remove('setting-active');
});

document.getElementById('profile-picture-btn').addEventListener('click', function() {
    document.getElementById('profile-form').classList.add('d-none');
    document.getElementById('profilePicture-form').classList.remove('d-none');
    document.getElementsById('div-o').classList.add('setting-active');
    document.getElementsById('div-p').classList.remove('setting-active');
});
