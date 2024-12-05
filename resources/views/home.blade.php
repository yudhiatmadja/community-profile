
        <x-layout>
            <x-slot:title>{{$title}}</x-slot:title>
        <!-- hero section -->

        <section class="hero max-w-6xl mx-auto">
          <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="flex flex-col gap-y-10">
              <div class="w-fit mt-14 px-3 py-2 small-badge flex flex-row bg-white rounded-full">
                <img src="images/world.png" alt="" class="w-6" />
                <p class="ms-1 text-base font-semibold text-indigo-950">We build more than 120,000 websites</p>
              </div>
              <div class="flex gap-y-2 flex-col">
                <h1 class="text-indigo-950 font-['Clash_Display'] lg:text-6xl text-4xl leading-none font-bold">
                  Build Your Website <br />
                  with Sigmalogy
                </h1>
                <p class="text-gray-500 text-base leading-loose">
                  kami menyediakan layanan untuk membangun <br />
                  website anda dan perusahaan anda
                </p>
              </div>

              <div class="flex flex-row gap-x-6 items-center">
                {{-- <a href="/order" class="bg-violet-800 hover:bg-indigo-950 text-lg text-white py-4 px-10 rounded-full font-semibold">Build Now</a> --}}
                <button id="build" class="bg-violet-800 hover:bg-indigo-950 text-lg text-white py-4 px-10 rounded-full font-semibold" onclick="my_modal_3.showModal()">Build Now</button>
                    <dialog id="my_modal_3" class="modal">
                    <div class="modal-box">
                        @if (session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
        @endif

        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Order Website</h2>
        <form action="/order" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="name" name="name"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition duration-300 ease-in-out transform hover:scale-105"
                       placeholder="Input your name" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Your Email</label>
                <input type="email" id="email" name="email"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition duration-300 ease-in-out transform hover:scale-105"
                       placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="number" class="block mb-2 text-sm font-medium text-gray-700">Phone Number</label>
                <input type="number" id="number" name="number"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition duration-300 ease-in-out transform hover:scale-105"
                       placeholder="08xxxxxxx" required />
            </div>
            <div class="mb-5">
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="deskripsi" name="description"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition duration-300 ease-in-out transform hover:scale-105"
                          required></textarea>
            </div>
            <div class="mb-5">
                <label for="domain" class="block mb-2 text-sm font-medium text-gray-700">Choose your domain</label>
                <select id="domain" name="option"
                        class="bg-gray-50 mb-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option selected disabled>Choose your domain</option>
                    @foreach ($domains as $domain)
                    <option value="{{ $domain["domain_name"] }}">{{ $domain["domain_name"] }}</option>
                    @endforeach

                </select>
            </div>

            <!-- Input file untuk upload bukti pembayaran -->
            <div class="mb-5">
                <label for="payment_proof" class="block mb-2 text-sm font-medium text-gray-700">Upload Bukti Pembayaran</label>
                <input type="file" id="payment_proof" name="payment_proof"
                       class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <p class="mt-1 text-sm text-gray-500">Format yang diperbolehkan: JPG, PNG, PDF (maks 5MB).</p>
            </div>

            <div class="flex flex-row items-center gap-x-3">
                <button type="submit"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 transition duration-300 ease-in-out transform hover:scale-105">
                    Order
                </button>
                <button type="button" onclick="window.location='{{ url('/') }}'"
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 transition duration-300 ease-in-out transform hover:scale-105">
                    Cancel
                </button>
            </div>
        </form>
                    </div>
                    </dialog>
                <a href="#domain" class="flex gap-x-2">
                  <img src="images/demo.png" alt="" class="w-6" />
                  <p href="#domain" class="text-violet-700 font-bold">Pilih Domain</p>
                </a>
              </div>
            </div>
            <div class="flex flex-row items-center">
              <img src="images/hero_img.png" alt="" class="w-[550px]" />
            </div>
          </div>
        </section>

        <!-- partners section -->

        <section class="partners max-w-6xl mx-auto py-12" id="partner">
          <h3 class="text-indigo-950 font-['Clash_Display'] text-5xl text-center mb-10">Partner Kami</h3>
          <div class="flex flex-col md:flex-row justify-between items-center gap-y-2">
            <img src="images/adclipse.png" alt="" class="w-32" />
            <img src="images/gopayy.png" alt="" class="w-32" />
            <img src="images/bca.png" alt="" class="w-20" />
            <img src="images/ovo.png" alt="" class="w-20" />
            <img src="images/visa.png" alt="" class="w-20" />
          </div>
        </section>

        <section class="layanan max-w-6xl mx-auto py-12" id="layanan">
          <h3 class="text-indigo-950 font-['Clash_Display'] text-5xl mb-7 text-center">Layanan Kami</h3>
          <div class="grid grid-rows-1 gap-y-2 md:grid-cols-4 gap-x-8">
            <div class="cardlayanan flex flex-col gap-y-5 bg-white rounded-2xl p-5">
              <h3 class="font-bold text-center">E-Commerce</h3>
              <p class="text-gray-500 text-base">Pembuatan website e-commerce yang dilengkapi dengan fitur keranjang belanja, pembayaran online, pengelolaan produk, dan pelacakan pesanan.</p>
              <a href="#build" class="text-base text-violet-800 mt-auto font-semibold hover:text-indigo-900">Learn More</a>
            </div>
            <div class="cardlayanan flex flex-col gap-y-5 bg-white rounded-2xl p-5">
              <h3 class="font-bold text-center">Layanan SEO</h3>
              <p class="text-gray-500 text-base">Optimasi website untuk mesin pencari agar lebih mudah ditemukan oleh pengguna, termasuk pengoptimalan kecepatan, struktur data, dan konten untuk SEO.</p>
              <a href="#build" class="text-base text-violet-800 mt-auto font-semibold hover:text-indigo-900">Learn More</a>
            </div>
            <div class="cardlayanan flex flex-col gap-y-5 bg-white rounded-2xl p-5">
              <h3 class="font-bold text-center">Landing Page</h3>
              <p class="text-gray-500 text-base">Layanan pembuatan landing page kustom untuk kebutuhan kampanye pemasaran digital, promosi produk, atau layanan. Fokus pada desain yang menarik dan konversi tinggi.</p>
              <a href="#build" class="text-base text-violet-800 mt-auto font-semibold hover:text-indigo-900">Learn More</a>
            </div>
            <div class="cardlayanan flex flex-col gap-y-5 bg-white rounded-2xl p-5">
              <h3 class="font-bold text-center">UI/UX</h3>
              <p class="text-gray-500 text-base">UI/UX website yang sudah ada untuk memberikan rekomendasi peningkatan pengalaman pengguna.</p>
              <a href="#build" class="text-base text-violet-800 mt-auto font-semibold hover:text-indigo-900">Learn More</a>
            </div>
          </div>
        </section>

        <section class="project max-w-6xl mx-auto py-12" id="proyek">
          <div class="flex flex-col gap-y-2 text-center">
            <h1 class="text-indigo-950 font-['Clash_Display'] text-center text-5xl">Proyek Kami</h1>
            <p class="text-base text-gray-500 text-center mt-3">Kami telah membangun website untuk beberapa perusahaan dan instansi</p>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-12">
            <div class="rounded-2xl relative group overflow-hidden">
              <img src="images/project/game.png" alt="" class="w-full h-auto" />
              <div class="flex justify-center w-full absolute inset-x-0 bottom-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://github.com/yudhiatmadja" target="_blank" class="bg-violet-700 text-white px-7 py-3 rounded-full shadow-2xl shadow-violet-700 hover:bg-violet-800 transition duration-300 ease-in-out">View Details</a>
              </div>
            </div>
            <div class="flex flex-col rounded-2xl relative overflow-hidden group">
              <img src="images/project/blog.png" alt="" class="w-full h-auto" />
              <div class="flex justify-center w-full absolute inset-x-0 bottom-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://github.com/yudhiatmadja" target="_blank" class="bg-violet-700 text-white px-7 py-3 rounded-full shadow-2xl shadow-violet-700 hover:bg-violet-800 transition duration-300 ease-in-out">View Details</a>
              </div>
            </div>

            <div class="flex flex-col rounded-2xl relative overflow-hidden group">
              <img src="images/project/web3.png" alt="" class="w-full h-auto" />
              <div class="flex justify-center w-full absolute inset-x-0 bottom-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                <a href="https://github.com/yudhiatmadja" target="_blank" class="bg-violet-700 text-white px-7 py-3 rounded-full shadow-2xl shadow-violet-700 hover:bg-violet-800 transition duration-300 ease-in-out">View Details</a>
              </div>
            </div>
          </div>
        </section>

   
        <section class="domain max-w-6xl mx-auto py-12" id="domain">
            <h3 class="text-indigo-950 font-['Clash_Display'] text-5xl mb-7 text-center">Pilih Domain</h3>
            <div class="grid grid-rows-1 gap-y-2 md:grid-cols-3 gap-x-8">
                @foreach ($domains as $domain)

                <div class="carddomain flex flex-col gap-y-5 bg-white rounded-2xl p-5 hover:scale-110 duration-200">
                    <div class="flex flex-row gap-x-2">
                        <h1 class="text-4xl font-bold text-blue-700 ">{{ $domain["domain_name"] }}</h1>

                    </div>

                    <p class="text-sm text-gray-500">{{ $domain["description"] }}</p>
                    <div class="flex flex-row gap-x-2">
                        <p class="line-through text-gray-500 text-[17px]">Rp. {{ $domain["original_price"] }}</p>
                        <span class="flex justify-center w-fit items-center me-2 rounded bg-red-700 px-2.5 py-0.5 text-xs font-medium text-white dark:bg-primary-900 dark:text-primary-300">HOT PROMO</span>
                    </div>
                        <P class="text-lg text-blue-700">Rp. {{ $domain["discounted_price"] }}</P>
                  </div>
                @endforeach



            </div>
        </section>


        <section class="fitur mx-auto max-w-6xl bg-violet-700 p-8 rounded-3xl z-20 relative">
          <div class="grid grid-cols-1 gap-y-5 md:grid-cols-2 gap-x-10">
            <div class="flex flex-col gap-y-10">
              <div class="w-fit mt-2 px-3 py-2 small-badge flex flex-row bg-white rounded-full">
                <img src="images/world.png" alt="" class="w-6" />
                <p class="ms-1 text-base font-semibold text-indigo-950">We build more than 120,000 websites</p>
              </div>
              <div class="flex gap-y-2 flex-col">
                <h1 class="text-white font-['Clash_Display'] text-5xl leading-none font-bold">Start Build Today</h1>
                <p class="text-white text-base leading-loose">
                  kami menyediakan layanan untuk membangun <br class="md:block hidden" />
                  website anda dan perusahaan anda
                </p>
              </div>

              <div class="flex flex-row gap-x-6 items-center">
                <a href="" class="bg-yellow-500 hover:bg-yellow-700 text-lg text-indigo-950 py-3 px-8 rounded-full font-semibold">Explore More</a>
                <a href="" class="flex gap-x-2">
                  <img src="images/demo-white.png" alt="" class="w-6" />
                  <p class="text-white font-bold">Pilih Domain</p>
                </a>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-x-5 gap-y-5">
              <div class="group hover:bg-[#080c2e] cardfitur bg-white p-5 rounded-2xl flex items-center flex-col gap-y-5 transition duration-300 ease-in-out">
                <img src="images/fitur/crawl.png" alt="" />

                <div class="flex flex-col items-center">
                  <h3 class="font-bold text-center group-hover:text-white transition duration-300 ease-in-out">Web Crawl</h3>
                  <a href="" class="text-base font-semibold text-gray-500 group-hover:block hidden group-hover:text-white transition duration-300 ease-in-out">Learn More</a>
                </div>
              </div>
              <div class="group hover:bg-[#080c2e] cardfitur bg-white p-5 rounded-2xl flex items-center flex-col gap-y-5 transition duration-300 ease-in-out">
                <img src="images/fitur/report.png" alt="" />

                <div class="flex flex-col items-center">
                  <h3 class="font-bold text-center group-hover:text-white transition duration-300 ease-in-out">Fast Report</h3>
                  <a href="" class="text-base font-semibold text-gray-500 group-hover:block hidden group-hover:text-white transition duration-300 ease-in-out">Learn More</a>
                </div>
              </div>
              <div class="group hover:bg-[#080c2e] cardfitur bg-white p-5 rounded-2xl flex items-center flex-col gap-y-5 transition duration-300 ease-in-out">
                <img src="images/fitur/ddos.png" alt="" />

                <div class="flex flex-col items-center">
                  <h3 class="font-bold text-center group-hover:text-white transition duration-300 ease-in-out">Anti-DDoS</h3>
                  <a href="" class="text-base font-semibold text-gray-500 group-hover:block hidden group-hover:text-white transition duration-300 ease-in-out">Learn More</a>
                </div>
              </div>

              <div class="group hover:bg-[#080c2e] cardfitur bg-white p-5 rounded-2xl flex items-center flex-col gap-y-5 transition duration-300 ease-in-out">
                <img src="images/fitur/scale.png" alt="" class="w-10" />

                <div class="flex flex-col items-center">
                  <h3 class="font-bold text-center group-hover:text-white transition duration-300 ease-in-out">Auto-Scale</h3>
                  <a href="" class="text-base font-semibold text-gray-500 group-hover:block hidden group-hover:text-white transition duration-300 ease-in-out">Learn More</a>
                </div>
              </div>
              <div class="group hover:bg-[#080c2e] cardfitur bg-white p-5 rounded-2xl flex items-center flex-col gap-y-5 transition duration-300 ease-in-out">
                <img src="images/fitur/ai.png" alt="" />

                <div class="flex flex-col items-center">
                  <h3 class="font-bold text-center group-hover:text-white transition duration-300 ease-in-out">AI Perform</h3>
                  <a href="" class="text-base font-semibold text-gray-500 group-hover:block hidden group-hover:text-white transition duration-300 ease-in-out">Learn More</a>
                </div>
              </div>
              <div class="group hover:bg-[#080c2e] cardfitur bg-white p-5 rounded-2xl flex items-center flex-col gap-y-5 transition duration-300 ease-in-out">
                <img src="images/fitur/plugin.png" alt="" />

                <div class="flex flex-col items-center">
                  <h3 class="font-bold text-center group-hover:text-white transition duration-300 ease-in-out">Top Plugins+</h3>
                  <a href="" class="text-base font-semibold text-gray-500 group-hover:block hidden group-hover:text-white transition duration-300 ease-in-out">Learn More</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="footer w-screen -mt-[200px] bg-[#070C29] -z-10">
          <div class="max-w-6xl mx-auto py-10 flex flex-col justify-center items-center gap-y-5 pt-[300px]">
            <img src="images/logo_footer.png" alt="" class="w-56" />
            <p class="text-white text-center">Developed by Yudhi Dev Studio</p>
          </div>
        </section>
        </x-layout>

