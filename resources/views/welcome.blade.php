<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $greeting }} - Start Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.cdnfonts.com/css/times-new-roman" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/jetbrains-mono" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <!--<h1 class="title">{{ $greeting }}</h1>-->
            <!--<p class="time" id="current-time">Loading time...</p>-->
        </header>
        <main class="shortcuts">
            <div class="image-header">
                <img src="https://voxie12.github.io/moon/wallpaper/wallhaven-28gz5g.jpg" alt="Wallpaper">
                <div id="current-time" class="time-overlay">Loading time...</div>
            </div>
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Search Google..." />
            </div>
            <div class="shortcut-grid">
                <a href="https://www.google.com" target="_blank" class="shortcut-item">Google</a>
                <a href="https://www.github.com" target="_blank" class="shortcut-item">GitHub</a>
                <a href="https://www.reddit.com" target="_blank" class="shortcut-item">Reddit</a>
                <a href="https://neovim.io" target="_blank" class="shortcut-item">Neovim</a>
                <a href="https://mail.google.com/" target="_blank" class="shortcut-item">Gmail</a>
                <a href="https://www.npmjs.com" target="_blank" class="shortcut-item">npm</a>
                <a href="https://www.mozilla.org" target="_blank" class="shortcut-item">Mozilla</a>
                <a href="https://www.npmjs.com/package/laravel" target="_blank" class="shortcut-item">Laravel</a>
            </div>
        </main>
        <footer class="footer">
            <p>| <i>Never Swim alone in the Big Arctic Ocean</i> |</p>
        </footer>
    </div>
    <script>
        function updateTime() {
            const now = new Date();
            const timeString = now.toLocaleTimeString();
            document.getElementById('current-time').textContent = `${timeString}`;
        }
        setInterval(updateTime, 1000);
        updateTime();

        const searchInput = document.getElementById('search-input');
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const query = searchInput.value;
                window.open(`https://www.google.com/search?q=${query}`, '_blank');
            }
        });
    </script>
</body>
</html>

