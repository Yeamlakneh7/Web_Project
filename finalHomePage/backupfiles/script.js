document.addEventListener("DOMContentLoaded", function () {
  console.log("Document is ready");
});
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("bookingForm");

  form.addEventListener("submit", function (event) {
    event.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const garage = document.getElementById("garage").value;
    const service = document.getElementById("service").value;
    const date = document.getElementById("date").value;

    alert(
      `Booking confirmed for ${name} at ${garage} for ${service} on ${date}. Confirmation will be sent to ${email}.`
    );
  });
});

//menu toggling=====================//
function toggleMenu() {
  const navLinks = document.getElementById("nav-links");
  navLinks.classList.toggle("show");
}
//=================================//

/*===================CHANGE TEXT AND IMAGE WHEN CLICKED*/
document.addEventListener("DOMContentLoaded", () => {
  const serviceImage = document.getElementById("serviceImage");
  const serviceDescription = document.getElementById("serviceDescription");

  const services = {
    diagnostic: {
      image: "diagno.jpg ",
      description: `<b>Diagnostic Test</b><br><br>
                    In Auto Servicing Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. <br>
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet <br>
                    lorem sit clita duo justo magna dolore erat amet Quality Servicing Expert Workers Modern Equipment`,
    },
    engine: {
      image: "engine.jpg",
      description: `<b>Engine Servicing</b><br><br>
                    High-quality engine servicing for your vehicle. Ensuring optimal performance and longevity. <br>
                    Expert workers with modern equipment ready to serve you.`,
    },
    tires: {
      image: "tires.jpg",
      description: `<b>Tires Replacing</b><br><br>
                    Professional tire replacement services to keep you safe on the road. <br>
                    Quality tires and expert installation.`,
    },
    oil: {
      image: "oil.jpg",
      description: `<b>Oil Changing</b><br><br>
                    Regular oil changes to keep your engine running smoothly. <br>
                    Fast and reliable service by experienced technicians.`,
    },
  };

  document
    .getElementById("diagnostic")
    .addEventListener("click", () => updateService("diagnostic"));
  document
    .getElementById("engine")
    .addEventListener("click", () => updateService("engine"));
  document
    .getElementById("tires")
    .addEventListener("click", () => updateService("tires"));
  document
    .getElementById("oil")
    .addEventListener("click", () => updateService("oil"));

  function updateService(service) {
    serviceImage.src = services[service].image;
    serviceDescription.innerHTML = services[service].description;

    // Remove the class first to restart the animation
    serviceDescription.classList.remove("animated");

    // Force reflow to restart the animation (this is needed to trigger a CSS reflow)
    void serviceDescription.offsetWidth;

    // Add the animation class
    serviceDescription.classList.add("animated");

    // Change the background color of the right side
    rightSide.classList.add("red-background");
    setTimeout(() => {
      rightSide.classList.remove("red-background");
    }, 1000); // Change back to original color after 1 second
  }
});

//=====================================================//
