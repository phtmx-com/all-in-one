<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/" hx-get="/" hx-target="#app" hx-swap="innerHTML" hx-push-url="true">PHTMX</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link"
                       aria-current="page"
                       href="/"
                       hx-get="/"
                       hx-target="#app"
                       hx-swap="innerHTML"
                       hx-push-url="true"
                    >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/docs" hx-get="/docs" hx-target="#app" hx-swap="innerHTML" hx-push-url="true">Docs</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>