function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
       change.target.classList.add('element-show');
      }
      else if (!change.isIntersecting){
        setTimeout(change.target.classList.remove('element-show'), 10000);
      }
    });
  }
  
  let options = {
    threshold: [0.5] };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.scroll');
  
  for (let elm of elements) {
    observer.observe(elm);
  }