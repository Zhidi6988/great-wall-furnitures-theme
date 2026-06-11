// portfolio.js

gsap.registerPlugin(ScrollTrigger);

const iframe = document.getElementById('api-frame');
const uid = '0b5e16dd5a1a484dbd2cf5d04ce91547';

const client = new Sketchfab(iframe);
let sketchfabApi = null;

// The camera positions and targets for each section provided by the user
const cameraStates = [
  { pos: [1.02, -1.08, 0.93], target: [-0.07, -0.11, 0.52] }, // cam-view-1
  { pos: [-0.82, -1.09, 1.14], target: [0.13, -0.30, 0.54] }, // cam-view-2
  { pos: [1.28, 1.09, 0.71], target: [0.09, -0.28, 0.49] },   // cam-view-3 (Power)
  { pos: [-0.01, -1.45, 0.71], target: [0.01, 0.02, 0.47] },  // cam-view-4 (Autofocus)
  { pos: [-0.01, -1.45, 0.71], target: [0.01, 0.02, 0.47] }   // cam-view-5 (Explore - duplicated from 4)
];

client.init(uid, {
  success: function onSuccess(api) {
    sketchfabApi = api;
    api.start();
    api.addEventListener('viewerready', function() {
      setupScrollAnimations();
    });
  },
  error: function onError() {
    console.log('Sketchfab API Error');
  },
  autostart: 1,
  preload: 1,
  transparent: 1,
  ui_theme: 'dark',
  ui_infos: 0,
  ui_controls: 0, 
  ui_stop: 0,
  ui_watermark: 0,
  scrollwheel: 0 // Disable zoom so scroll works normally
});

function setupScrollAnimations() {
  const proxy = {
    px: cameraStates[0].pos[0], py: cameraStates[0].pos[1], pz: cameraStates[0].pos[2],
    tx: cameraStates[0].target[0], ty: cameraStates[0].target[1], tz: cameraStates[0].target[2]
  };

  function updateCamera() {
    if(sketchfabApi) {
      sketchfabApi.setCameraLookAt(
        [proxy.px, proxy.py, proxy.pz], 
        [proxy.tx, proxy.ty, proxy.tz], 
        0
      );
    }
  }

  // Set the initial camera position before any scrolling
  updateCamera();

  // Progress Dots Logic
  const dots = document.querySelectorAll('.progress-dot');
  function updateActiveDot(index) {
    dots.forEach(dot => dot.classList.remove('active'));
    if (dots[index]) {
      dots[index].classList.add('active');
    }
  }

  // HTML Text animations
  const sections = gsap.utils.toArray('.section');

  // Add click to scroll functionality for dots
  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      // Offset by 1 because section 0 is the header
      const targetSection = sections[index + 1];
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  sections.forEach((sec, i) => {
    
    // Animate the Camera: 
    // Section index 1 is cam-view-1 (state 0). Section index 2 is cam-view-2 (state 1), etc.
    if (i > 1 && i <= cameraStates.length) {
      const prevState = cameraStates[i - 2];
      const targetState = cameraStates[i - 1];
      
      gsap.fromTo(proxy, 
        {
          px: prevState.pos[0], py: prevState.pos[1], pz: prevState.pos[2],
          tx: prevState.target[0], ty: prevState.target[1], tz: prevState.target[2]
        },
        {
          px: targetState.pos[0], py: targetState.pos[1], pz: targetState.pos[2],
          tx: targetState.target[0], ty: targetState.target[1], tz: targetState.target[2],
          ease: "power1.inOut",
          onUpdate: updateCamera,
          scrollTrigger: {
            trigger: sec,
            start: "top 70%", // Starts moving just before the text fades in
            end: "top 30%",   // Finishes moving precisely when the text finishes fading in
            scrub: 1
          }
        }
      );
    }

    // Animate the Text fading in and out
    const contents = sec.querySelectorAll('.fade-content');
    if (contents.length > 0 && i > 0) {
      contents.forEach(content => {
        // Fade In
        if (i > 1) {
          gsap.fromTo(content, 
            { autoAlpha: 0, y: 50 }, 
            { 
              autoAlpha: 1, 
              y: 0, 
              scrollTrigger: {
                trigger: sec,
                start: "top 60%", // Starts fading in when section reaches 60% of viewport
                end: "top 30%",   // Fully visible when it reaches 30%
                scrub: true
              }
            }
          );
        } else {
          // For the first section, text is visible immediately
          gsap.set(content, { autoAlpha: 1, y: 0 });
        }
        
        // Fade Out
        let fadeOutStart = "bottom 40%";
        let fadeOutEnd = "bottom 10%";
        
        // For the first section, fade out immediately when the user starts scrolling
        if (i === 1) {
          fadeOutStart = "top top";
          fadeOutEnd = "top -25%";
        }

        gsap.fromTo(content, 
          { autoAlpha: 1, y: 0 },
          {
            autoAlpha: 0,
            y: -50,
            scrollTrigger: {
              trigger: sec,
              start: fadeOutStart,
              end: fadeOutEnd,
              scrub: true
            }
          }
        );
      });
    }

    // Update Progress Dots
    if (i >= 1 && i <= 5) {
      const dotIndex = i - 1;
      ScrollTrigger.create({
        trigger: sec,
        start: "top 50%",
        end: "bottom 50%",
        onEnter: () => updateActiveDot(dotIndex),
        onEnterBack: () => updateActiveDot(dotIndex)
      });
    }
  });
}
