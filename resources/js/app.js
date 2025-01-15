import './bootstrap';
import 'video.js/dist/video-js.css'; // Video.js stil dosyası

import Alpine from 'alpinejs'
import videojs from 'video.js'; // Video.js kütüphanesi

// Global olarak videojs'e erişmek isterseniz
window.videojs = videojs;
 
window.Alpine = Alpine
 
Alpine.start()