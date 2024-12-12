<footer class="relative py-8" style="background-image: url('{{ asset('img/footersikc.jpg') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black opacity-60"></div> <!-- Overlay -->

            <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-white">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8"> 
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="{{ asset('img/logotelkomwhite.png') }}" alt="Telkom University" class="h-16">
                    </div>

                    <!-- Kontak -->
                    <div class="space-y-4 text-right md:col-start-2">
                        <h4 class="text-lg font-semibold">Contact Us</h4>
                        <p class="flex items-center justify-end space-x-2">
                            <img src="{{ asset('img/iconmailwhite.png') }}" alt="Email Icon" class="w-5 h-5">
                            <span>d4sikc@tass.telkomuniversity.ac.id</span>
                        </p>
                        <p class="flex items-center justify-end space-x-2">
                            <img src="{{ asset('img/iconlocationwhite.png') }}" alt="Location Icon" class="w-5 h-5">
                            <span class="whitespace-nowrap">Gd. Selaru, Universitas Telkom, Bandung, Indonesia</span>
                        </p>
                    </div>

                    <!-- Tautan -->
                    <div class="space-y-4 text-right md:col-start-3">
                        <h4 class="text-lg font-semibold">About</h4>
                        <a href="#" class="block hover:text-gray-300">Our projects</a>
                        <a href="#" class="block hover:text-gray-300">Careers</a>
                    </div>
                </div>

                <!-- Garis Pembatas -->
                <div class="border-t border-gray-500 mt-32 pt-4 flex justify-between items-center">
                    <!-- Copyright -->
                    <p class="text-sm">Copyright &copy; 2024 - Smart City Information System, All Rights Reserved</p>

                    <!-- Ikon Media Sosial -->
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300">
                            <img src="{{ asset('img/iconigwhite.png') }}" alt="Instagram Icon" class="w-7 h-6">
                        </a>
                        <a href="#" class="hover:text-gray-300">
                            <img src="{{ asset('img/iconytwhite.png') }}" alt="YouTube Icon" class="w-6 h-6">
                        </a>
                        <a href="#" class="hover:text-gray-300">
                            <img src="{{ asset('img/iconlinkedinwhite.png') }}" alt="LinkedIn Icon" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>
        </footer>