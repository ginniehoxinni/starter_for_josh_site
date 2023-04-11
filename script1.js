gsap.timeline()
.from('.navbar', {scale:0, duration:2})
.from('.navbar-brand', {opacity:0, scale: 0, ease:"back"})
.from('.tag', {opacity:0, y: 10, ease:"back"});
