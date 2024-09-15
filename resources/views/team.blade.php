<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <section class="relative bg-gradient-to-b from-[#1F1F1F] to-[#000000] text-white">
      <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 items-center">
          <div class="flex justify-center md:justify-center">
              <img src="img/HANAFI.png" alt="Raihan Nafi" class="h-96 w-auto object-cover rounded-md shadow-lg">
          </div>
          <div class="mt-8 md:mt-0 text-center md:text-left">
              <h1 class="text-4xl font-bold">Welcome Hydrogen Enthusiast!</h1>
              <p class="mt-4 text-lg">
                  Antasena ITS Team was founded in 2010 to make Indonesia a <span class="font-semibold">global hydrogen technology</span> center. We aim to be at the forefront of hydrogen renewable energy research and drive sustainability by creating the world’s most efficient hydrogen-powered vehicles.
              </p>
              <p class="mt-4 text-lg">
                  Our main goal is to prepare future engineers to tackle global challenges effectively.
              </p>
              <p class="mt-4 font-semibold">Raihan Nafi</p>
              <p>General Manager Antasena 2024</p>
          </div>
      </div>
  </section>

  <section class="bg-white text-black py-12" style="background-image: url('img/pngtree-white-grid-cartoon-png-material-image_1250727.jpg'); background-position: center;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold">Meet our <span class="text-purple-600">teams</span>!</h2>
        <p class="mt-4 text-lg">
            Fueled by the desire for innovation and a sustainable future, we're building a groundbreaking hydrogen vehicle. While achieving recognition is an honor, our true goal is to create efficient hydrogen cars that have a <span class="font-semibold">lasting positive impact</span>.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <button id="viewAll" class="px-4 py-2 bg-purple-600 text-white rounded-full" onclick="filterTeams('all', 'viewAll')">ViewAll</button>
            <button id="technical" class="px-4 py-2 bg-white border border-gray-300 text-gray-800 rounded-full" onclick="filterTeams('technical', 'technical')">Technical</button>
            <button id="research" class="px-4 py-2 bg-white border border-gray-300 text-gray-800 rounded-full" onclick="filterTeams('research', 'research')">Science & Technology Research Development</button>
            <button id="operation" class="px-4 py-2 bg-white border border-gray-300 text-gray-800 rounded-full" onclick="filterTeams('operation', 'operation')">Operation & Finance</button>
            <button id="communication" class="px-4 py-2 bg-white border border-gray-300 text-gray-800 rounded-full" onclick="filterTeams('communication', 'communication')">Communication</button>
        </div>

        <div class="mt-8 space-y-8">
            <!-- Technical Division -->
            <div class="team-section technical bg-gray-100 p-6 rounded-lg border-2 border-gray-300" id="technicalSection">
                <h3 class="text-xl font-bold">Technical Division</h3>
                    <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                    <img src="img/technical1.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical2.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical3.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical4.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical5.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical6.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical7.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical8.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical9.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical10.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical11.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical12.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical13.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical14.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical15.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical16.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/technical17.png" alt="Technical Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                </div>
                <p>These are the engineers and technicians who design and develop hydrogen-powered vehicles.</p>
            </div>

            <!-- Science & Technology Research Development -->
            <div class="team-section research bg-gray-100 p-6 rounded-lg border-2 border-gray-300" id="researchSection">
                <h3 class="text-xl font-bold">Science & Technology Research Development</h3>
                    <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                    <img src="img/snt1.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/snt2.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/snt3.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/snt4.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/snt5.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/snt6.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/snt7.png" alt="Research Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                </div>
                <p>Focused on researching hydrogen energy and developing the latest innovations in clean energy technology.</p>
            </div>

            <!-- Operation & Finance Division -->
            <div class="team-section operation bg-gray-100 p-6 rounded-lg border-2 border-gray-300" id="operationSection">
                <h3 class="text-xl font-bold">Operation & Finance Division</h3>
                    <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                    <img src="img/opfi1.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi2.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi3.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi4.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi5.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi6.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi7.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/opfi8.png" alt="Operation Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                </div>
                <p>Manages finances, procurement, and the logistics of the project to ensure smooth operations.</p>
            </div>

            <!-- Communication Division -->
            <div class="team-section communication bg-gray-100 p-6 rounded-lg border-2 border-gray-300" id="communicationSection">
                <h3 class="text-xl font-bold">Communication Division</h3>
                    <div class="flex flex-wrap items-center justify-center gap-4 mb-4">
                    <img src="img/com1.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com2.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com3.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com4.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com5.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com6.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com7.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com8.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com9.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com10.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com11.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                    <img src="img/com12.png" alt="Communication Team" class="h-48 w-auto object-cover rounded-md shadow-lg">
                </div>
                <p>Handles media outreach, public relations, and team communications to build a strong network.</p>
            </div>
        </div>
    </div>
</section>

  <script>
      function filterTeams(team, buttonId) {
          var sections = document.querySelectorAll('.team-section');
          var buttons = document.querySelectorAll('button');
          
          sections.forEach(function(section) {
              if (team === 'all') {
                  section.style.display = 'block';
              } else {
                  if (section.id.includes(team)) {
                      section.style.display = 'block';
                  } else {
                      section.style.display = 'none';
                  }
              }
          });

          buttons.forEach(function(btn) {
              btn.classList.remove('bg-purple-600', 'text-white');
              btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-800');
          });

          var activeButton = document.getElementById(buttonId);
          activeButton.classList.remove('bg-white', 'text-gray-800');
          activeButton.classList.add('bg-purple-600', 'text-white');
      }
  </script>
  <x-footer></x-footer>
</x-layout>