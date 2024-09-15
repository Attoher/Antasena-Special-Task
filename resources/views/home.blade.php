<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div>
    <div class="relative bg-cover bg-center" style="background-image: url('{{ asset('img/bghead1.png') }}');">
      <div class="absolute inset-0 bg-black opacity-50"></div>
      <div class="relative container mx-auto flex flex-col lg:flex-row items-center justify-between text-center lg:text-left py-20">

        <div class="lg:w-5/12 w-full lg:text-left text-center mb-8 lg:mb-0">
          <h1 class="text-4xl sm:text-5xl font-bold mb-4 text-white">
            Hi! We are the First <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">Hydrogen Car Research</span> Team in Indonesia
          </h1>
          <p class="text-lg sm:text-xl mb-6 text-white">
            We are currently developing a new hydrogen vehicle to achieve a better future. Our innovation is to build and design efficient hydrogen cars, and hope that we will not only strive to win awards.
          </p>
          <p class="mb-6 font-semibold text-white">#EMBRACE THE FUTURE</p><br>
          <a href="/partners" class="bg-gradient-to-r from-blue-500 to-pink-500 text-white py-3 px-6 rounded-full font-bold transition-colors duration-300 hover:from-blue-600 hover:to-pink-600">
            Become Our Partner
          </a>
        </div>

        <div class="lg:w-7/12 w-full">
          <img src="img/carwshadow-cropped.png" alt="Hydrogen Car" class="w-full">
        </div>
      </div>
    </div>
    <br>
    <div class="bg-gradient-to-b from-[#000000] to-[#1f1f1f] py-16 px-4 sm:px-6 lg:px-8">
      <div class="container mx-auto text-center">
        <h4 class="text-5xl font-bold mb-8 text-white">
          <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">Sharing and Inspiring </span>with Antasena ITS Team Activities
        </h4>
        <img src="img/hero-img.png" alt="Latest Achievement" class="w-full max-w-lg h-auto object-cover rounded-3xl mx-auto">
      </div>
      <div class="container mx-auto text-center">
        <h4 class="text-5xl font-bold text-white mt-5">
          <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">Our Other Activity </span> with Antasena ITS Team Activities
        </h4>
      </div>
    </div>
    <div class="bg-gradient-to-b from-[#1f1f1f] to-[#000000] ">
      <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Box 1 -->
          <div class="bg-gradient-to-b from-[#1F1F1F] to-[#000000] p-4 rounded-3xl border border-[#5F0072] flex items-center justify-center shadow-xl shadow-[#000000]">
            <img src="img/image1.png" alt="Project 1" class="w-full h-auto object-cover rounded-3xl">
          </div>
          <!-- Box 2 -->
          <div class="bg-gradient-to-b from-[#1F1F1F] to-[#000000] p-4 rounded-3xl border border-[#5F0072] flex items-center justify-center shadow-xl shadow-[#000000]">
            <img src="img/image2.png" alt="Project 2" class="w-full h-auto object-cover rounded-3xl">
          </div>
          <!-- Box 3 -->
          <div class="bg-gradient-to-b from-[#1F1F1F] to-[#000000] p-4 rounded-3xl border border-[#5F0072] flex items-center justify-center shadow-xl shadow-[#000000]">
            <img src="img/image.png" alt="Project 3" class="w-full h-auto object-cover rounded-3xl">
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gradient-to-b from-[#000000] to-[#1f1f1f]">
      <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center">
          <div class="w-8 h-8 bg-white rounded-full absolute left-1/2 transform -translate-x-1/2 hidden xl:block"></div>
          <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0">
            <h3 class="text-5xl font-bold mb-8 text-white"><span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">Get to know</span> us Better</h3>
            <p class="text-white text-2xl">
              Antasena team is the first hydrogen car research team in Indonesia. The team was made by students from Institut Teknologi Sepuluh Nopember which focuses on studies and research related to technological innovations using renewable energy.
            </p>
          </div>
          <div class="lg:w-1/2">
            <div class="w-full p-4 border border-[#5F0072] bg-gradient-to-b from-[#1F1F1F] to-[#000000] rounded-3xl shadow-xl shadow-[#000000]">
              <video controls class="w-full h-auto rounded-lg">
                <source src="vid/Fly Beyond Limit_ Tim Antasena ITS Luncurkan Mobil Prototype Antasena Falcon (720p60, h264, youtube).mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-gradient-to-b from-[#1f1f1f] to-[#000000]">
      <div class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto text-center">
          <h4 class="text-5xl font-bold mb-8 text-white">
            More than <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">50+ Companies</span> Support our Team
          </h4>
          <img src="img/Supports.png" alt="Supporting Companies" class="w-full max-w-4xl h-auto object-cover rounded-3xl mx-auto">
        </div>
      </div>
    </div>

      <div class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto text-center">
          <h4 class="text-5xl font-bold mb-8 text-white">
            <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">Achievement</span>
          </h4>
        </div>
      </div>
    
      <div class="bg-gradient-to-b from-black to-zinc-700 py-16 px-4 sm:px-6 lg:px-8">
        <div class="py-16 px-4 sm:px-6 lg:px-8 relative">
          <div class="container mx-auto flex flex-col lg:flex-row items-center">
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-[2px] bg-white"></div>
      
            <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0 flex justify-center lg:mr-4">
              <div class="w-full max-w-sm p-4 border border-[#5F0072] bg-gradient-to-b from-[#1F1F1F] to-[#000000] rounded-3xl shadow-xl shadow-[#000000]">
                <img src="img/ach1.png" alt="Achievement 1" class="w-full h-auto object-cover rounded-3xl mx-auto">
              </div>
            </div>
      
          <div class="w-8 h-8 bg-white rounded-full absolute left-1/2 transform -translate-x-1/2 hidden xl:block"></div>
            <div class="lg:w-1/2 text-center lg:text-left lg:ml-20">
              <h3 class="text-2xl font-bold text-white mb-4">
                <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">1 ST PLACE APC <br> (Autonomous Programming Competition) 2022</span>
              </h3>
            </div>
          </div>
        </div>
      
        <div class="py-16 px-4 sm:px-6 lg:px-8 relative">
          <div class="container mx-auto flex flex-col lg:flex-row items-center">
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-[2px] bg-white"></div>
      
          <div class="w-8 h-8 bg-white rounded-full absolute left-1/2 transform -translate-x-1/2 hidden xl:block"></div>
            <div class="lg:w-1/2 mb-8 lg:mb-0 text-center lg:text-right lg:mr-4">
              <h3 class="text-2xl font-bold text-white mb-4">
                <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">1 ST PLACE <br> Communication Awards 2022</span>
              </h3>
            </div>
      
            <div class="lg:w-1/2 lg:pl-8 mb-8 lg:mb-0 flex justify-center lg:ml-20">
              <div class="w-full max-w-sm p-4 border border-[#5F0072] bg-gradient-to-b from-[#1F1F1F] to-[#000000] rounded-3xl shadow-xl shadow-[#000000]">
                <img src="img/ach2.png" alt="Achievement 2" class="w-full h-auto object-cover rounded-3xl mx-auto">
              </div>
            </div>
          </div>
        </div>
      
        <div class="py-16 px-4 sm:px-6 lg:px-8 relative">
          <div class="container mx-auto flex flex-col lg:flex-row items-center">
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-[2px] bg-white"></div>
      
            <div class="lg:w-1/2 lg:pr-8 mb-8 lg:mb-0 flex justify-center lg:mr-4">
              <div class="w-full max-w-sm p-4 border border-[#5F0072] bg-gradient-to-b from-[#1F1F1F] to-[#000000] rounded-3xl shadow-xl shadow-[#000000]">
                <img src="img/ach3.png" alt="Achievement 3" class="w-full h-auto object-cover rounded-3xl mx-auto">
              </div>
            </div>
      
          <div class="w-8 h-8 bg-white rounded-full absolute left-1/2 transform -translate-x-1/2 hidden xl:block"></div>
            <div class="lg:w-1/2 text-center lg:text-left lg:ml-20">
              <h3 class="text-2xl font-bold text-white mb-4">
                <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">TOP 5 Global <br> Virtual League Table <br> from all over the world 2022</span>
              </h3>
            </div>
          </div>
        </div>
      
        <div class="py-16 px-4 sm:px-6 lg:px-8 relative">
          <div class="container mx-auto flex flex-col lg:flex-row items-center">
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-1/2 top-0 bottom-0 w-[2px] bg-white"></div>
      
          <div class="w-8 h-8 bg-white rounded-full absolute left-1/2 transform -translate-x-1/2 hidden xl:block"></div>
            <div class="lg:w-1/2 mb-8 lg:mb-0 text-center lg:text-right lg:mr-4">
              <h3 class="text-2xl font-bold text-white mb-4">
                <span class="bg-gradient-to-r from-blue-500 to-pink-500 bg-clip-text text-transparent">3 RD PLACE On Track <br> Awards 2022</span>
              </h3>
            </div>
      
            <div class="lg:w-1/2 lg:pl-8 mb-8 lg:mb-0 flex justify-center lg:ml-20">
              <div class="w-full max-w-sm p-4 border border-[#5F0072] bg-gradient-to-b from-[#1F1F1F] to-[#000000] rounded-3xl shadow-xl shadow-[#000000]">
                <img src="img/ach4.png" alt="Achievement 4" class="w-full h-auto object-cover rounded-3xl mx-auto">
              </div>
            </div>
          </div>
        </div>
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
          <div class="p-8 rounded-3xl shadow-xl flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-1/2 w-full bg-gradient-to-b from-purple-900 to-indigo-900 p-8 rounded-3xl">
              <h3 class="text-2xl font-bold text-white mb-6 text-center">Get Closer with Us</h3>
              <form>
                <div class="mb-4">
                  <input type="text" placeholder="Name" class="w-full px-4 py-3 text-black rounded-lg focus:outline-none" />
                </div>
                <div class="mb-4">
                  <input type="email" placeholder="Email" class="w-full px-4 py-3 text-black rounded-lg focus:outline-none" />
                </div>
                <div class="mb-4">
                  <input type="text" placeholder="No. Phone" class="w-full px-4 py-3 text-black rounded-lg focus:outline-none" />
                </div>
                <div class="mb-6">
                  <textarea placeholder="Message" class="w-full px-4 py-3 text-black rounded-lg focus:outline-none h-32"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-lg transition-colors">Send</button>
              </form>
            </div>
        
            <div class="lg:w-1/2 w-full text-white mt-8 lg:mt-0 lg:pl-12">
              <h3 class="text-2xl font-bold mb-4">What They Said About Antasena ITS</h3>
              <p class="mb-6">
                Antasena has proven successful in developing hydrogen-based vehicles, which of course, in addition to making Indonesia proud, also has a positive impact on the environment and public health. Internationally, the products of this nation's children have been able to compete at the global level. Congratulations to all members of the Antasena team.
              </p>
              <div class="flex items-center">
                <img src="img/ellipse.png" alt="Founder Image" class="w-16 h-16 rounded-full mr-4" />
                <div>
                  <p class="font-semibold">Prof. Dr. rer. nat. Evvy Kartini</p>
                  <p>Founder National Battery Research Institute (NBRI)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
      
      <x-footer></x-footer>
      
    </div>
  </div>
</x-layout>
