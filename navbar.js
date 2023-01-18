fetch('navbar.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById("navbar").innerHTML = data;
  });

window.addEventListener('load', function(){
    var newsletterButton = document.getElementById("newsletter-button");
    var newsletterModal = document.getElementById("newsletter-modal");
    var closeModal = document.getElementsByClassName("close")[0];

    newsletterButton.onclick = function() {
      newsletterModal.style.display = "block";
    }

    closeModal.onclick = function() {
      newsletterModal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == newsletterModal) {
        newsletterModal.style.display = "none";
      }
    }
});
