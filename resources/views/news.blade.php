<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="bg-gradient-to-b from-zinc-800 to-black min-h-screen text-white py-12">
    <div class="container mx-auto">
      <h2 class="text-4xl font-bold text-center mb-8">Newsroom</h2>
  
      <div class="relative">
        <div id="carousel" class="overflow-hidden">
          <div id="carousel-items" class="flex transition-transform duration-500">
            <div class="min-w-full p-8 bg-purple-700 rounded-lg">
              <h3 class="ml-10 text-2xl font-bold mb-4">PT PLN Nusantara Power: Renewable Energy Pioneer for Indonesia's Future</h3>
              <p class="ml-10 text-sm mb-4">Surabaya July - PT PLN Nusantara Power is a subsidiary of PT PLN Persero that focuses on power generation in Indonesia covering a wide range of energy sources including coal...</p>
              <a href="#" class="ml-10 text-white underline">Read more</a>
            </div>
            <div class="min-w-full p-8 bg-purple-700 rounded-lg">
              <h3 class="ml-10 text-2xl font-bold mb-4">PT PLN Nusantara Power: Renewable Energy Pioneer for Indonesia's Future</h3>
              <p class="ml-10 text-sm mb-4">Surabaya July - PT PLN Nusantara Power is a subsidiary of PT PLN Persero that focuses on power generation in Indonesia covering a wide range of energy sources including coal...</p>
              <a href="#" class="ml-10 text-white underline">Read more</a>
            </div>
            <div class="min-w-full p-8 bg-purple-700 rounded-lg">
              <h3 class="ml-10 text-2xl font-bold mb-4">PT PLN Nusantara Power: Renewable Energy Pioneer for Indonesia's Future</h3>
              <p class="ml-10 text-sm mb-4">Surabaya July - PT PLN Nusantara Power is a subsidiary of PT PLN Persero that focuses on power generation in Indonesia covering a wide range of energy sources including coal...</p>
              <a href="#" class="ml-10 text-white underline">Read more</a>
            </div>
            <div class="min-w-full p-8 bg-purple-700 rounded-lg">
              <h3 class="ml-10 text-2xl font-bold mb-4">PT PLN Nusantara Power: Renewable Energy Pioneer for Indonesia's Future</h3>
              <p class="ml-10 text-sm mb-4">Surabaya July - PT PLN Nusantara Power is a subsidiary of PT PLN Persero that focuses on power generation in Indonesia covering a wide range of energy sources including coal...</p>
              <a href="#" class="ml-10 text-white underline">Read more</a>
            </div>
            <div class="min-w-full p-8 bg-purple-700 rounded-lg">
              <h3 class="ml-10 text-2xl font-bold mb-4">PT PLN Nusantara Power: Renewable Energy Pioneer for Indonesia's Future</h3>
              <p class="ml-10 text-sm mb-4">Surabaya July - PT PLN Nusantara Power is a subsidiary of PT PLN Persero that focuses on power generation in Indonesia covering a wide range of energy sources including coal...</p>
              <a href="#" class="ml-10 text-white underline">Read more</a>
            </div>
          </div>
        </div>
  
        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-purple-600 p-2 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
  
        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-purple-600 p-2 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </button>
      </div>
  
      <div class="dots flex justify-center mt-4">
        <div class="dot w-3 h-3 bg-purple-500 rounded-full mx-1"></div>
        <div class="dot w-3 h-3 bg-gray-400 rounded-full mx-1"></div>
        <div class="dot w-3 h-3 bg-gray-400 rounded-full mx-1"></div>
        <div class="dot w-3 h-3 bg-gray-400 rounded-full mx-1"></div>
        <div class="dot w-3 h-3 bg-gray-400 rounded-full mx-1"></div>
      </div>

  
      <div class="mt-12">
        <div class="flex justify-center space-x-4 mb-8">
          <button class="px-4 py-2 bg-purple-600 text-white rounded-full filter-button" data-filter="all">Show All</button>
          <button class="px-4 py-2 bg-white text-purple-600 rounded-full filter-button" data-filter="webinar">Webinar</button>
          <button class="px-4 py-2 bg-white text-purple-600 rounded-full filter-button" data-filter="report">Report</button>
          <button class="px-4 py-2 bg-white text-purple-600 rounded-full filter-button" data-filter="achievement">Achievement</button>
        </div>
  
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="news-grid">
          <div class="news-item bg-white text-black p-6 rounded-lg shadow-lg" data-category="report">
            <p class="text-purple-600 text-sm mb-2">Report • Jul 04, 2024</p>
            <h3 class="text-lg font-semibold">LINTECH: Oil and Gas, Mining and Industrial</h3>
          </div>
          
          <div class="news-item bg-white text-black p-6 rounded-lg shadow-lg" data-category="report">
            <p class="text-purple-600 text-sm mb-2">Report • Jul 02, 2024</p>
            <h3 class="text-lg font-semibold">PT SKF Indonesia: Embracing Innovation and Sustainability</h3>
          </div>

          <div class="news-item bg-white text-black p-6 rounded-lg shadow-lg" data-category="report">
            <p class="text-purple-600 text-sm mb-2">Achievement • Jul 13, 2024</p>
            <h3 class="text-lg font-semibold">PT PLN Nusantara Power: Renewable Energy Pioneer for Indonesia</h3>
          </div>

          <div class="news-item bg-white text-black p-6 rounded-lg shadow-lg" data-category="report">
            <p class="text-purple-600 text-sm mb-2">Report • Jul 18, 2024</p>
            <h3 class="text-lg font-semibold">PT Acuan Teknologi Rekayasa: Where Engineering Meets</h3>
          </div>

          <div class="news-item bg-white text-black p-6 rounded-lg shadow-lg" data-category="report">
            <p class="text-purple-600 text-sm mb-2">Webinar • Jul 17, 2024</p>
            <h3 class="text-lg font-semibold">MSDI: "We Work Without Borders"</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script>
  
  const prev = document.getElementById('prev');
  const next = document.getElementById('next');
  const carouselItems = document.getElementById('carousel-items');
  const totalItems = carouselItems.children.length;
  const dots = document.querySelectorAll('.dot');
  let currentIndex = 0;

  carouselItems.style.width = `${totalItems * 100}%`;
  Array.from(carouselItems.children).forEach(item => {
    item.style.width = `${100 / totalItems}%`;
  });

  next.addEventListener('click', () => {
    if (currentIndex < totalItems - 1) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  });

  prev.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalItems - 1;
    }
    updateCarousel();
  });

  function updateCarousel() {
    carouselItems.style.transform = `translateX(-${currentIndex * 100}%)`;
    updateDots();
  }

  function updateDots() {
    dots.forEach((dot, index) => {
      if (index === currentIndex) {
        dot.classList.add('bg-purple-500');
        dot.classList.remove('bg-gray-400');
      } else {
        dot.classList.add('bg-gray-400');
        dot.classList.remove('bg-purple-500');
      }
    });
  }

  updateCarousel();
  const filterButtons = document.querySelectorAll('.filter-button');
  const newsItems = document.querySelectorAll('.news-item');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      const filter = button.getAttribute('data-filter');
      filterNews(filter);
      
      filterButtons.forEach(btn => {
        btn.classList.remove('bg-purple-600', 'text-white');
        btn.classList.add('bg-white', 'text-purple-600');
      });
      button.classList.add('bg-purple-600', 'text-white');
      button.classList.remove('bg-white', 'text-purple-600');
    });
  });

  function filterNews(category) {
    newsItems.forEach(item => {
      if (category === 'all' || item.getAttribute('data-category') === category) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }

  filterNews('all');
</script>

  
  <x-footer></x-footer>
</x-layout>