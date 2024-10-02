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

  const list = document.querySelector('#pendahuluan');

  list.addEventListener('click', () => {
      list.classList.add("listScroll");
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

  // sideNav
  const toggleButton = document.getElementById('toggle-sidebar');
  const sidebar = document.getElementById('sidebar');
  const column = document.getElementById('myCourse');

  toggleButton.addEventListener('click', function(event) {
      event.preventDefault();
      sidebar.classList.toggle('hidden');


      if (column.classList.contains('col-10')) {
          column.classList.remove('col-10');
          column.classList.add('col-12');
      } else {
          column.classList.remove('col-12');
          column.classList.add('col-10');
      }
  });
});
