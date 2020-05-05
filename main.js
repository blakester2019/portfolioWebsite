document.addEventListener('DOMContentLoaded', function() {

    const modals = document.querySelectorAll('.modal');
    M.Modal.init(modals);
  
    ScrollOut({
      once: false
    });
  
    });