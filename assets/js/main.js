/* =========================================================
   Premium Tech Website Animations — Conzura Soft Solutions
   Uses: GSAP + ScrollTrigger + AOS (optional)
   ========================================================= */

// ===== INITIAL SETUP =====

// Register GSAP plugins. CSSRulePlugin is necessary to animate the ::before element.
gsap.registerPlugin(ScrollTrigger, CSSRulePlugin); // <-- CRITICAL FIX: Registered CSSRulePlugin

// Wait for page load for smooth fade-in
window.addEventListener("load", () => {
  document.body.classList.add("loaded");
});

// ===== CUSTOM CURSOR =====
const cursor = document.querySelector(".custom-cursor");
let cursorX = 0,
  cursorY = 0;

window.addEventListener("mousemove", (e) => {
  cursorX = e.clientX;
  cursorY = e.clientY;
});

// Smooth cursor motion with GSAP ticker
gsap.ticker.add(() => {
  gsap.to(cursor, {
    x: cursorX,
    y: cursorY,
    duration: 0.25,
    ease: "power3.out",
  });
});

// Cursor hover expansion effect
document.querySelectorAll("a, button, .service-card").forEach((el) => {
  el.addEventListener("mouseenter", () => cursor.classList.add("hover"));
  el.addEventListener("mouseleave", () => cursor.classList.remove("hover"));
});

// ===== HERO SECTION ANIMATION =====
const heroTimeline = gsap.timeline({ delay: 0.3 });

// The clearProps: "opacity" is added to ensure that once the animation finishes,
// the elements don't get stuck at opacity: 0 if the CSS failed or was overridden.
heroTimeline
  .from(".logo-link", { y: -20, opacity: 0, duration: 0.6, ease: "power3.out", clearProps: "opacity" })
  .from(
    ".nav-links",
    { y: -20, opacity: 0, duration: 0.6, ease: "power3.out", stagger: 0.1, clearProps: "opacity" },
    "-=0.4"
  )
  .from(
    ".hero-headline span",
    { y: 60, opacity: 0, duration: 1, ease: "power3.out", stagger: 0.1, clearProps: "opacity" },
    "-=0.2"
  )
  .from(".hero-subheadline", { y: 40, opacity: 0, duration: 1, clearProps: "opacity" }, "-=0.6")
  .from(".cta-button", { scale: 0.9, opacity: 0, duration: 0.6, clearProps: "opacity" }, "-=0.4");

// ===== HERO PARALLAX MOVEMENT =====
gsap.to(".hero-headline", {
  yPercent: 10,
  scrollTrigger: {
    trigger: ".hero-headline",
    start: "top top",
    scrub: 1,
  },
});

gsap.to(".hero-subheadline", {
  yPercent: 20,
  scrollTrigger: {
    trigger: ".hero-subheadline",
    start: "top center",
    scrub: 1,
  },
});

// ===== AURORA BACKGROUND ROTATION =====
// CRITICAL FIX: Use CSSRulePlugin.getRule() to target the pseudo-element correctly
const auroraRule = CSSRulePlugin.getRule(".aurora-background::before");

if (auroraRule) { 
  gsap.to(auroraRule, { 
    cssRule: {
      rotation: 360, 
    },
    duration: 20,
    repeat: -1,
    ease: "none",
  });
} else {
    // This warning should no longer appear with CSSRulePlugin loaded
    console.warn("GSAP: Could not find .aurora-background::before rule for animation.");
}

// ===== SCROLL ANIMATIONS =====
// gsap.utils.toArray("section").forEach((section) => {
//   gsap.from(section.querySelectorAll("h2, p, .service-card, .process-step"), {
//     y: 50,
//     opacity: 0,
//     duration: 1,
//     ease: "power3.out",
//     stagger: 0.2,
//     scrollTrigger: {
//       trigger: section,
//       start: "top 85%",
//       toggleActions: "play none none reverse",
//     },
//   });
// });

// ===== SERVICE CARD HOVER LIGHT EFFECT (Rest of code omitted for brevity, no changes needed) =====
const serviceCards = document.querySelectorAll(".service-card");

serviceCards.forEach((card) => {
  const border = card.querySelector(".card-border");
  card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    border.style.setProperty("--mouse-x", `${x}px`);
    border.style.setProperty("--mouse-y", `${y}px`);
  });
});

// ===== PROCESS SECTION LINE ANIMATION =====
if (document.querySelector("#process-line")) {
  gsap.to("#process-line", {
    scaleX: 1,
    duration: 1.5,
    ease: "power3.inOut",
    scrollTrigger: {
      trigger: "#process-line",
      start: "top 85%",
      toggleActions: "play none none reverse",
    },
  });
}

// ===== TECHNOLOGY ICON FADE-IN =====
gsap.utils.toArray(".tech-logo-container").forEach((logo, i) => {
  gsap.from(logo, {
    opacity: 0,
    scale: 0.9,
    duration: 0.8,
    delay: i * 0.1,
    scrollTrigger: {
      trigger: logo,
      start: "top 90%",
    },
  });
});

// ===== FAQ SECTION (ACCORDION LOGIC) =====
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
  const question = item.querySelector(".faq-question");
  const answer = item.querySelector(".faq-answer");

  question.addEventListener("click", () => {
    const isOpen = item.classList.contains("is-open");

    // Close all FAQs first
    faqItems.forEach((i) => i.classList.remove("is-open"));
    faqItems.forEach((i) => {
      i.querySelector(".faq-answer").style.maxHeight = 0;
      i.querySelector(".faq-answer").style.paddingTop = 0;
      i.querySelector(".faq-answer").style.paddingBottom = 0;
    });

    // Open the clicked one if it was closed
    if (!isOpen) {
      item.classList.add("is-open");
      answer.style.maxHeight = answer.scrollHeight + "px";
      answer.style.paddingTop = "1rem";
      answer.style.paddingBottom = "1rem";
    }
  });
});

// ===== TESTIMONIAL SECTION FADE-IN =====
// if (document.querySelector(".testimonial-container")) {
//   gsap.from(".testimonial-container", {
//     opacity: 0,
//     y: 60,
//     duration: 1,
//     ease: "power3.out",
//     scrollTrigger: {
//       trigger: ".testimonial-container",
//       start: "top 80%",
//     },
//   });
// }

// ===== CTA BUTTON HOVER MICROINTERACTION =====
const ctas = document.querySelectorAll(".cta-button");
ctas.forEach((cta) => {
  cta.addEventListener("mouseenter", () => {
    gsap.to(cta, {
      scale: 1.05,
      boxShadow: "0 0 25px rgba(249, 115, 22, 0.3)",
      duration: 0.3,
      ease: "power2.out",
    });
  });
  cta.addEventListener("mouseleave", () => {
    gsap.to(cta, {
      scale: 1,
      boxShadow: "0 0 0 rgba(249, 115, 22, 0)",
      duration: 0.4,
      ease: "power2.out",
    });
  });
});

// ===== AOS (OPTIONAL FALLBACK FOR STATIC ELEMENTS) =====
if (typeof AOS !== "undefined") {
  AOS.init({
    once: true,
    duration: 1000,
    easing: "ease-out-cubic",
  });
}





console.log("✨ Premium animations initialized successfully!");