<!-- resources/views/admin/theme/theme.blade.php -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/theme.css') }}">

<!-- Pop-up Toggle Button -->
<a href="#" class="btn btn-primary btn-theme-toggle shadow" id="popupButton" title="Ubah Tema">
    <i class="fa fa-magic"></i>
</a>

<!-- Pop-up Panel -->
<div id="popupPanel" class="theme-popup shadow">
    <h6 class="mb-2">Pilih Tema</h6>
    <button class="btn btn-sm btn-outline-dark w-100 mb-2" onclick="setTheme('light')">Tema Default</button>
    <button class="btn btn-sm btn-outline w-100" onclick="setTheme('1')">Tema 1</button>
    <button class="btn btn-sm btn-outline w-100" onclick="setTheme('2')">Tema 2</button>
    <button class="btn btn-sm btn-outline w-100" onclick="setTheme('3')">Tema 3</button>
    <button class="btn btn-sm btn-outline w-100" onclick="setTheme('4')">Tema 4</button>
</div>

<!-- Script -->
<script>
    const popupBtn = document.getElementById('popupButton');
    const popupPanel = document.getElementById('popupPanel');

    popupBtn.addEventListener('click', function (e) {
        e.preventDefault();
        popupPanel.style.display = popupPanel.style.display === 'block' ? 'none' : 'block';
    });

    function setTheme(mode) {
        document.documentElement.setAttribute('data-theme', mode);
        localStorage.setItem('theme', mode);
        popupPanel.style.display = 'none';
    }

    // Set theme on page load
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
</script>
