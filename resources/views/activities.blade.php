<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="" style="background-image: url('img/pngtree-white-grid-cartoon-png-material-image_1250727.jpg'); background-position: center;">
    <div class="bg-gradient-to-l from-[#1f1f1f] to-[#000000] py-6 text-center">
      <h2 class="text-xl md:text-3xl font-bold text-white uppercase">
          the essence of our activity
      </h2>
    </div>
  
    <div class="bg-white container mx-auto px-4 py-8">
        <div class=" shadow-md rounded-lg">
            <ul>
                <li class="border-b border-gray-200 p-4 flex justify-between items-center">
                    <span class="font-semibold text-gray-800">Antasena Super Course</span>
                    <span class="text-sm text-gray-500">300+ Participants</span>
                </li>
                <li class="border-b border-gray-200 p-4 flex justify-between items-center">
                    <span class="font-semibold text-gray-800">Shell Eco Marathon</span>
                    <span class="text-sm text-gray-500">Runner Up</span>
                </li>
                <li class="border-b border-gray-200 p-4 flex justify-between items-center">
                    <span class="font-semibold text-gray-800">Internalization of Antasena ITS Team</span>
                    <span class="text-sm text-gray-500">40+ Participants</span>
                </li>
                <li class="p-4 flex justify-between items-center">
                    <span class="font-semibold text-gray-800">Antasena ITS Team Charity</span>
                    <span class="text-sm text-gray-500">100+ Participants</span>
                </li>
            </ul>
        </div>
    </div>
  </div>
  <div class="bg-gradient-to-b from-[#000000] to-[#1F1F1F]">
    <div class="container mx-auto px-4 py-8">
      <h3 class="text-lg font-semibold text-white mb-4">See what our participants write about us:</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="img/activity1.jpg" alt="Image 1" class="w-full">
          </div>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="img/activity3.jpg" alt="Image 2" class="w-full">
          </div>
          <div class="bg-white shadow-md rounded-lg overflow-hidden">
              <img src="img/activity4.jpg" alt="Image 3" class="w-full">
          </div>
      </div>
    </div>
  </div>

  <div class="bg-gradient-to-b from-[#1F1F1F] to-[#000000] text-white py-10">
      <div class="container mx-auto px-4">
          <h3 class="text-lg font-bold mb-4">Antasena In Numbers</h3>
          <p class="text-gray-400 mb-6">By becoming the first hydrogen car team in Indonesia, we keep innovating for better programs and ways of working to create more goodness to society.</p>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
              <div class="text-center">
                  <p class="text-2xl font-bold">7k+</p>
                  <p class="text-sm text-gray-400">Followers on Instagram</p>
              </div>
              <div class="text-center">
                  <p class="text-2xl font-bold">160+</p>
                  <p class="text-sm text-gray-400">Followers on Twitter</p>
              </div>
              <div class="text-center">
                  <p class="text-2xl font-bold">3k</p>
                  <p class="text-sm text-gray-400">Followers on TikTok</p>
              </div>
              <div class="text-center">
                  <p class="text-2xl font-bold">500+</p>
                  <p class="text-sm text-gray-400">Followers on LinkedIn</p>
              </div>
              <div class="text-center">
                  <p class="text-2xl font-bold">300</p>
                  <p class="text-sm text-gray-400">Subscribers on YouTube</p>
              </div>
              <div class="text-center">
                  <p class="text-2xl font-bold">50+</p>
                  <p class="text-sm text-gray-400">Media Coverage</p>
              </div>
          </div>
      </div>
  </div>
  <x-footer></x-footer>
</x-layout>