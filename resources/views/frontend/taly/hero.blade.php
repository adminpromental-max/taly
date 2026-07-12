<section class="taly-hero" aria-label="Taly hero">
    <div class="taly-hero__glow" aria-hidden="true"></div>
    <div class="taly-hero__grid" aria-hidden="true"></div>

    <div class="taly-hero__inner">
        <div class="taly-hero__brand">
            <img
                src="{{ static_asset('frontend/img/taly/logo-slogan.png') }}"
                alt="Taly — Your Journey to Academic Excellence"
                width="280"
                height="153"
            >
        </div>

        <h1 class="taly-hero__title">
            Prep for <span>SAT</span>, <span>ACT</span> &amp; <span>EST</span>
        </h1>

        <p class="taly-hero__lead">
            Specialized courses that guide American School graduates toward university — with clarity, confidence, and results.
        </p>

        <div class="taly-hero__actions">
            <a href="#tracks" class="taly-btn taly-btn--primary">
                Explore your path
                <i class="fas fa-arrow-down"></i>
            </a>
            @guest
                <a href="{{ route('student.sign_up') }}" class="taly-btn taly-btn--accent">
                    Start free
                </a>
            @else
                <a href="{{ route('courses') }}" class="taly-btn taly-btn--ghost">
                    Browse courses
                </a>
            @endguest
        </div>
    </div>

    <div class="taly-hero__scroll" aria-hidden="true">
        <span>Scroll</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>
