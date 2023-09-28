<nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm">
    <div class="container-fluid ms-4"> <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="/">
            <img src="/assets/icon.png" width="35" height="35" class="d-inline-block align-top" alt="Logo Tekno">
            @if (request()->is('detail'))
            <span class="m-2 fs-4 fw-bold" style="color: white;">Article</span>
            @else
            <span class="m-2 fs-4 fw-bold" style="">Article</span>
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" data-bs-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fw-bold" id="navbarNavALtMarkup">
            @if (request()->is('/'))
            <div class="navbar-nav ms-auto">
                <a href="/dashboard" class="btn btn-outline-dark me-5 fw-bold px-4" type="button">Sign in</a> </div>
            </div>
            @elseif(request()->is('dashboard'))
            <div class="navbar-nav ms-auto me-4">
                <u class="mt-1 fs-5 fw-bold">Admin</u>
                <img src="/assets/icon.png" width="35" height="35" class="d-inline-block align-top ms-4" alt="Logo Tekno">
            </div>
        </div>
            @endif
    </div>
</nav>