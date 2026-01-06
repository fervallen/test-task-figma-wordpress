document.addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('burger');
    const menu = document.getElementById('mobileMenu');
  
    if (!burger || !menu) return;
  
    const tl = gsap.timeline({ paused: true });
    tl.fromTo(menu, { x: '100%' }, { x: '0%', duration: 0.4, ease: 'power2.out' });
  
    let open = false;
  
    burger.addEventListener('click', () => {
      if (!open) {
        menu.classList.remove('hidden');
        tl.play(0);
      } else {
        tl.reverse();
        setTimeout(() => menu.classList.add('hidden'), 400);
      }
      open = !open;
    });
  });
  