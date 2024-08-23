<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="section-profile shadow-sm rounded p-3 mt-3 mb-3 bg-white dark:bg-gray-800">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2">
                    <div class="flex flex-wrap">
                        <div class="w-full sm:w-1/3 img-profile text-center sm:text-left">
                            <div class="photo">
                                <img src="https://i.pinimg.com/474x/92/70/02/927002368dfb5a96427ae990838dd112.jpg"
                                    alt="Avatar" class="avatar object-cover rounded w-48 h-48 mx-auto sm:mx-0" width="200" height="200">
                            </div>
                        </div>
                        <div class="w-full sm:w-2/3 description text-center sm:text-left mt-4 sm:mt-0">
                            <h1 id="data-name" class="text-2xl font-bold text-gray-900 dark:text-white">Anisa Catur Wahyuni</h1>
                            <p id="data-role" class="text-gray-600 dark:text-gray-300">Front End Designer</p>
                            <button class="bg-blue-500 text-white py-2 px-4 rounded mt-2 mb-2">Kontak</button>
                            <button class="bg-white border border-green-500 text-green-500 py-2 px-4 rounded mt-2 mb-2 dark:bg-gray-800 dark:border-green-500 dark:text-green-400">Resume</button>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 information">
                    <div class="flex flex-wrap">
                        <label class="w-1/2 sm:w-1/4 font-bold text-gray-900 dark:text-white">Availability</label>
                        <p class="w-1/2 sm:w-3/4 text-gray-700 dark:text-gray-300" id="data-availability">Full Time</p>
                    </div>
                    <div class="flex flex-wrap">
                        <label class="w-1/2 sm:w-1/4 font-bold text-gray-900 dark:text-white">Usia</label>
                        <p class="w-1/2 sm:w-3/4 text-gray-700 dark:text-gray-300" id="data-age">19</p>
                    </div>
                    <div class="flex flex-wrap">
                        <label class="w-1/2 sm:w-1/4 font-bold text-gray-900 dark:text-white">Lokasi</label>
                        <p class="w-1/2 sm:w-3/4 text-gray-700 dark:text-gray-300" id="data-lokasi">Jakarta</p>
                    </div>
                    <div class="flex flex-wrap">
                        <label class="w-1/2 sm:w-1/4 font-bold text-gray-900 dark:text-white">Pengalaman</label>
                        <p class="w-1/2 sm:w-3/4 text-gray-700 dark:text-gray-300" id="data-experience">2 Tahun</p>
                    </div>
                    <div class="flex flex-wrap">
                        <label class="w-1/2 sm:w-1/4 font-bold text-gray-900 dark:text-white">Email</label>
                        <p class="w-1/2 sm:w-3/4 text-gray-700 dark:text-gray-300" id="data-email">email@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-form shadow-sm rounded p-3 mt-3 mb-3 bg-white dark:bg-gray-800">
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Name</label>
                    <input type="text" class="form-input w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="name">
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Role</label>
                    <input type="text" class="form-input w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="role">
                </div>
                <div class="mb-4">
                    <label for="availability" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Availability</label>
                    <select class="form-select w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="availability">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Internship">Internship</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="age" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Age</label>
                    <input type="number" class="form-input w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="age">
                </div>
                <div class="mb-4">
                    <label for="location" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Location</label>
                    <input type="text" class="form-input w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="lokasi">
                </div>
                <div class="mb-4">
                    <label for="experience" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Years Experience</label>
                    <input type="number" class="form-input w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="experience">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Email Address</label>
                    <input type="email" class="form-input w-full border border-gray-300 dark:border-gray-700 rounded px-3 py-2 dark:bg-gray-700 dark:text-white" id="email">
                </div>
                <button type="button" class="w-full bg-green-500 text-white py-2 px-4 rounded dark:bg-green-600" id="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</x-app-layout>
