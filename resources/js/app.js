import './bootstrap';

import Alpine from 'alpinejs';
import { Chart, registerables } from 'chart.js/auto';
window.Alpine = Alpine;

window.Chart = Chart;
Alpine.start();

console.log('hello')