  // animation
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      console.log(entry);

      // transition animation slide left
    if (entry.isIntersecting) {
        entry.target.classList.add("show-left");
      } else {
        entry.target.classList.remove("show-left");
      }
  
      // transition animaytion slide right
      if (entry.isIntersecting) {
        entry.target.classList.add("show-right")
      } else {
        entry.target.classList.remove('show-right')
      }
      // transition slide left
      if (entry.isIntersecting) {
        entry.target.classList.add("show-bottom");
      } else {
        entry.target.classList.remove("show-bottom");
      }
  
      if (entry.isIntersecting) {
        entry.target.classList.add("show-top");
      }
      //  else {
      //   entry.target.classList.remove('show-top')
      // }
    });
  });
  
  // animation left
  const hiddenElementBottom = document.querySelectorAll(".hidden-bottom");
  
  hiddenElementBottom.forEach((el) => observer.observe(el));
  
  // animation top
  const hiddenElementTop = document.querySelectorAll(".hidden-top");
  
  hiddenElementTop.forEach((el) => observer.observe(el));

  // transition animation slide left
const hiddenElementLeft = document.querySelectorAll(".hidden-left");

hiddenElementLeft.forEach((el) => observer.observe(el));

// transition animaytion slide right
const hiddenElementRight = document.querySelectorAll('.hidden-right')

hiddenElementRight.forEach((el) => observer.observe(el))