<div>
    <x-page-heading :pageHeading="__('Tax-Settings')" :pageDesc="__('Manage your tax settings here.')"/>



</div>

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