<x-layouts.app :title="__('Payroll Dashboard')">
    <!-- Bar Navigasi -->
    <div class="w-full bg-blue-600 p-4 text-white shadow-md flex justify-between items-center">
        <h1 class="text-lg font-bold">Payroll Dashboard</h1>
        <button id="darkModeToggle"
            class="bg-blue-500 hover:bg-blue-700 text-white px-3 py-2 rounded-lg transition flex items-center gap-2">
            <span id="darkModeText">Mode Gelap</span>
            <svg id="darkModeIcon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none"
                stroke="currentColor">
                <path
                    d="M12 3v2m0 14v2m9-9h-2m-14 0H3m16.95-6.95l-1.414 1.414M6.343 17.657l-1.414 1.414M17.657 17.657l1.414 1.414M6.343 6.343L4.93 4.93" />
            </svg>
        </button>
    </div>

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-100 dark:bg-gray-800 p-4 h-full hidden md:block">
            <ul class="space-y-4">
                <li><a href="#" class="block text-gray-800 dark:text-white hover:text-blue-600">Data Pegawai</a></li>
                <li><a href="#" class="block text-gray-800 dark:text-white hover:text-blue-600">Laporan Gaji</a></li>
                <li><a href="#" class="block text-gray-800 dark:text-white hover:text-blue-600">Pengaturan</a></li>
            </ul>
        </aside>

        <!-- Konten Utama -->
        <main class="flex-1 p-4 overflow-auto">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                @foreach (['Total Employees', 'Payroll Processed', 'Pending Approvals'] as $title)
                    <div class="relative rounded-xl bg-neutral-800 text-white p-6 shadow-md transition hover:scale-105">
                        <h2 class="text-lg font-semibold">{{ $title }}</h2>
                        <p class="text-3xl font-bold text-blue-400">0</p>
                    </div>
                @endforeach
            </div>

            <!-- Area Detail -->
            <div class="mt-4 rounded-xl bg-neutral-800 text-white p-6 shadow-md transition">
                <h2 class="text-lg font-semibold">Informasi Detail Payroll</h2>
            </div>
        </main>
    </div>
</x-layouts.app>

<!-- Script Mode Gelap -->
<script>
    const toggleButton = document.getElementById("darkModeToggle");
    const darkModeText = document.getElementById("darkModeText");
    const darkModeIcon = document.getElementById("darkModeIcon");

    // Fungsi untuk Toggle Mode Gelap
    function toggleDarkMode() {
        document.documentElement.classList.toggle('dark');
        const isDarkMode = document.documentElement.classList.contains('dark');
        localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
        updateDarkModeUI(isDarkMode);
    }

    // Fungsi untuk Memperbarui UI Tombol
    function updateDarkModeUI(isDark) {
        darkModeText.textContent = isDark ? "Mode Terang" : "Mode Gelap";
        darkModeIcon.innerHTML = isDark ?
            `<path d="M12 3v2m0 14v2m9-9h-2m-14 0H3m16.95-6.95l-1.414 1.414M6.343 17.657l-1.414 1.414M17.657 17.657l1.414 1.414M6.343 6.343L4.93 4.93" />` :
            `<path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />`;
    }

    // Event Listener untuk Tombol
    toggleButton.addEventListener("click", toggleDarkMode);

    // Set Mode Gelap Otomatis Berdasarkan Local Storage
    const isDarkModeEnabled = localStorage.getItem('darkMode') === 'enabled';
    if (isDarkModeEnabled) {
        document.documentElement.classList.add('dark');
    }
    updateDarkModeUI(isDarkModeEnabled);
</script>