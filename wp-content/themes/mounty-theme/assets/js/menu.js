document.addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('burger');
    const menu = document.getElementById('mobileMenu');
    if (!burger || !menu) return;
  
    const menuTimeLine = gsap.timeline({ paused: true });
    const burgerTimeLine = gsap.timeline({
      paused: true,
      onReverseComplete: () => {
        burger.textContent = "☰";
      },
      onComplete: () => {
        burger.textContent = "X";
      }
    });
    
    menuTimeLine.fromTo(menu, { x: '100%' }, { 
      x: '0%', 
      duration: 0.5, 
      ease: 'power2.out',
    });
    burgerTimeLine.fromTo(burger, { backgroundColor: '#DD3030' }, { 
      backgroundColor: '#000', 
      duration: 0.5,
    });
  
    let open = false;
    burger.addEventListener('click', () => {
      if (!open) {
        menu.classList.remove('hidden');
        menuTimeLine.play(0);
        burgerTimeLine.play(0);
      } else {
        setTimeout(() => menu.classList.add('hidden'), 500);
        menuTimeLine.reverse();
        burgerTimeLine.reverse();
      }
      open = !open;
    });
  });
  