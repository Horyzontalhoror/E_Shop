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
    <button class="btn btn-sm btn-outline-secondary w-100" onclick="setTheme('1')">Tema 1</button>
    <button class="btn btn-sm btn-outline-secondary w-100" onclick="setTheme('2')">Tema 2</button>
    <button class="btn btn-sm btn-outline-secondary w-100" onclick="setTheme('3')">Tema 3</button>
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

<div class="col-12 col-lg-5">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" class="bg-color-1" style="display: block; width: 100%; height: auto; margin-top: 10%; overflow: hidden; background-color: rgb(239, 145, 28);">
            <radialGradient id="vector_1_" cx="-83.089" cy="586.409" r="1231.0361" gradientTransform="matrix(1.0547 0 0 1.041 31.6759 66.8781)" gradientUnits="userSpaceOnUse">
            <stop offset="0" style="stop-color:#fffee6" class="stop-0"></stop>
            <stop offset="1" style="stop-color:#ef911c" class="stop-1"></stop>
        </radialGradient>
        <path fill="url(#vector_1_)" d="M512-185.459v624.134c-14.483-2.946-28.629-6.08-42.438-9.395
            C330.558,113.587,92.244,58.133,0,48.678v-234.137H512z"></path>

            <radialGradient id="vector_2_" cx="267.3573" cy="490.4305" r="239.4576" gradientTransform="matrix(1.0547 0 0 1.041 31.6759 66.8781)" gradientUnits="userSpaceOnUse">
            <stop offset="0" style="stop-color:#fffee6" class="stop-0"></stop>
            <stop offset="1" style="stop-color:#ef911c" class="stop-1"></stop>
        </radialGradient>
        <path fill="url(#vector_2_)" d="M512,438.675v106.159c-12.687-41.946-26.944-80.365-42.438-115.553
            C483.371,432.595,497.517,435.729,512,438.675z"></path>

            <radialGradient id="vector_3_" cx="134.8979" cy="492.4812" r="404.7526" gradientTransform="matrix(1.0547 0 0 1.041 31.6759 66.8781)" gradientUnits="userSpaceOnUse">
            <stop offset="0" style="stop-color:#fffee6" class="stop-0"></stop>
            <stop offset="1" style="stop-color:#ef911c" class="stop-1"></stop>
        </radialGradient>
        <path fill="url(#vector_3_)" d="M439.67,421.707C207.056,359.502,74.537,246.344,0,147.814
            C207.699,153.597,351.14,293.093,439.67,421.707z"></path>

            <radialGradient id="vector_4_" cx="-226.8645" cy="929.978" r="701.2617" gradientTransform="matrix(1.0547 0 0 1.041 31.6759 66.8781)" gradientUnits="userSpaceOnUse">
            <stop offset="0" style="stop-color:#fffee6" class="stop-0"></stop>
            <stop offset="1" style="stop-color:#ef911c" class="stop-1"></stop>
        </radialGradient>
        <path fill="url(#vector_4_)" d="M512,544.833v277.129H0V147.814c74.537,98.531,207.056,211.688,439.67,273.893
            C470.175,466.011,494.152,509.022,512,544.833z"></path>

            <radialGradient id="vector_5_" cx="-50.6213" cy="410.548" r="655.2834" gradientTransform="matrix(1.0547 0 0 1.041 31.6759 66.8781)" gradientUnits="userSpaceOnUse">
            <stop offset="0" style="stop-color:#fffee6" class="stop-0"></stop>
            <stop offset="1" style="stop-color:#ef911c" class="stop-1"></stop>
        </radialGradient>
        <path fill="url(#vector_5_)" d="M469.562,429.28c-10.144-2.432-20.11-4.954-29.892-7.574C351.14,293.093,207.699,153.597,0,147.814
            V48.678C92.244,58.133,330.558,113.587,469.562,429.28z"></path>

            <radialGradient id="vector_6_" cx="371.4349" cy="538.8596" r="249.6475" gradientTransform="matrix(1.0547 0 0 1.041 31.6759 66.8781)" gradientUnits="userSpaceOnUse">
            <stop offset="0" style="stop-color:#fffee6" class="stop-0"></stop>
            <stop offset="1" style="stop-color:#ef911c" class="stop-1"></stop>
        </radialGradient>
        <path fill="url(#vector_6_)" d="M512,544.833c-17.848-35.812-41.825-78.822-72.33-123.127c9.782,2.619,19.748,5.142,29.892,7.574
            C485.056,464.469,499.313,502.888,512,544.833z"></path>
    </svg>
</div>
