


var tl = gsap.timeline();
tl.from(".nav .imgFit img", {
  opacity: 0,
  y: -30,
  duration: 0.8,
});
tl.from(".page1 .left-content", {
  opacity: 0,
  x: -100,
  duration: 0.5,
  ease: "power2.out",
});
tl.from(".page1 .right-content", {
  opacity: 0,
  y: 100,
  duration: 0.5,
  ease: "power2.out",
});
tl.from(".page1 .left-content h3 #h", {
  opacity: 0,
  y: 20,
  duration: 0.2,
  ease: "power2.out",
});
tl.from(".page1 .left-content h3 #a", {
  opacity: 0,
  y: -20,
  duration: 0.2,
  ease: "power2.out",
});
tl.from(".page1 .left-content h3 #c", {
  opacity: 0,
  y: 20,
  duration: 0.2,
  ease: "power2.out",
});
tl.from(".page1 .left-content h3 #k", {
  opacity: 0,
  y: -20,
  duration: 0.2,
  ease: "power2.out",
});
tl.from(".page1 .left-content h3 #x", {
  opacity: 0,
  duration: 0.2,
  ease: "power2.out",
});
tl.from(".nav .menu li", {
  opacity: 0,
  y: -20,
  duration: 0.5,
  stagger: 0.1,
});

tl.from(".nav .social-icons li", {
  opacity: 0,
  scale: 0.2,
  stagger: 0.1,
});
let mm = gsap.matchMedia();

mm.add("(min-width: 901px)", () => {
  gsap.from(".page2 .left", {
    scrollTrigger: {
      trigger: ".page2",
      scroller: "body",
      start: "top 80%",
      end: "top 30%",
      scrub: true,
    },
    y: 100,
    opacity: 0,
    ease: "power2.out",
  });
});



gsap.from(".page2 .right", {
  scrollTrigger: {
    trigger: ".page2",
    scroller: "body",
    start: "top 80%",
    end: "top 30%",
    scrub: true,
  },
  x: 200,
  y: -100,
  rotate: 10,
  opacity: 0,
  ease: "power2.out",
});



const hackathonDate = new Date("May 20, 2025 00:00:00").getTime();

const timerElements = document.querySelectorAll(".timer h1");
function updateTimer() {
  const now = new Date().getTime();
  const distance = hackathonDate - now;

  if (distance < 0) {
    timerElements.forEach((el) => (el.innerText = "00:00"));
    return;
  }

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  timerElements[0].innerText = days.toString().padStart(2, "0");
  timerElements[1].innerText = hours.toString().padStart(2, "0");
  timerElements[2].innerText = minutes.toString().padStart(2, "0");
  timerElements[3].innerText = seconds.toString().padStart(2, "0");
}

updateTimer();
setInterval(updateTimer, 1000);


var tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".page3",
    start: "top 50%",
    end: "bottom top",
    scrub: 3,
    pin: true,
  },
});

tl2
  .to(".line", { width: "60%", duration: 2 })
  .from(".outer-ring", { opacity: 0 })
  .from(".date", { opacity: 0 })
  .from(".firstLine", { height: 0, opacity: 0 })
  .from(".firstLinecircle", { opacity: 0 })
  .from("#jj", { y: -50, opacity: 0 })

  .from(".outer-ring2", { opacity: 0 })
  .from(".date2", { opacity: 0 })
  .from(".secondLine", { scaleY: 0, transformOrigin: "bottom", opacity: 0 })
  .from(".secondLinecircle", { opacity: 0 })
  .from("#jj2", { y: -50, opacity: 0 })

  .from(".outer-ring3", { opacity: 0 })
  .from(".date3", { opacity: 0 })
  .from(".thirdLine", { height: 0, opacity: 0 })
  .from(".thirdLinecircle", { opacity: 0 })
  .from("#jj3", { y: -50, opacity: 0 })

  .from(".outer-ring4", { opacity: 0 })
  .from(".date4", { opacity: 0 })
  .from(".fourthLine", { scaleY: 0, transformOrigin: "bottom", opacity: 0 })
  .from(".fourLinecircle", { opacity: 0 })
  .from("#jj4", { y: -50, opacity: 0 })

  .from(".outer-ring5", { opacity: 0 })
  .from(".date5", { opacity: 0 })
  .from(".fifthLine", { height: 0, opacity: 0 })
  .from(".fiveLinecircle", { opacity: 0 })
  .from("#jj5", { y: -50, opacity: 0 });

