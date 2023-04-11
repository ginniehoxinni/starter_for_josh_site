gsap.registerPlugin(ScrollTrigger);


gsap.timeline()
.from('.navbar', {scale:0, duration:1})
.from('.navbar-brand', {opacity:0, scale: 0, ease:"back"})
.from('.tag', {opacity:0, y: 10, ease:"back"})
.from('.smallpage-title', {opacity:0, y: 10, ease:"back"});


 