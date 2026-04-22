import React from 'react';
import { createRoot } from 'react-dom/client';
import CircularGallery from './components/CircularGallery';

console.log('🔵 React bundle loaded');

async function initReactApp() {
  try {
    console.log('📡 Fetching gallery items from API...');
    
    // Use WordPress-provided REST URL (works on all environments/paths)
    const apiUrl = window.stratoConfig?.restUrl || '/wp-json/stratos/v1/gallery-items';
    console.log('📡 API URL:', apiUrl);
    
    const response = await fetch(apiUrl);
    console.log('📡 API Response status:', response.status);
    
    if (!response.ok) {
      throw new Error(`API Error: ${response.status} ${response.statusText}`);
    }
    
    const circularitems = await response.json();
    console.log('✅ Gallery items loaded:', circularitems);

    // Check for CircularGallery
    const circularGalleryEl = document.getElementById('circular-gallery');
    if (circularGalleryEl) {
      const root = createRoot(circularGalleryEl);
      root.render(<CircularGallery bend={-10} items={circularitems} />);
      console.log('🎉 CircularGallery rendered');
    }

    // Check for TestimonialCarousel
    const testimonialEl = document.getElementById('testimonial-carousel');
    if (testimonialEl) {
      const root = createRoot(testimonialEl);
      root.render(<TestimonialCarousel />);
      console.log('🎉 TestimonialCarousel rendered');
    }

    // Check for ProductGrid
    const productGridEl = document.getElementById('product-grid');
    if (productGridEl) {
      const root = createRoot(productGridEl);
      root.render(<ProductGrid />);
      console.log('🎉 ProductGrid rendered');
    }
  } catch (error) {
    console.error('❌ Error initializing React app:', error.message);
    console.error('Full error:', error);
  }
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initReactApp);
} else {
  initReactApp();
}