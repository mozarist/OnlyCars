import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 1000, // durasi animasi (ms)
    once: true,     // animasi jalan sekali saja
});

window.addEventListener('load', () => {
  AOS.refresh();
});