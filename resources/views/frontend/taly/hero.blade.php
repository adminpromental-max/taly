<section class="taly-hero" aria-label="Welcome">
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

        <p class="taly-hero__eyebrow">American School → University Ready</p>

        <h1 class="taly-hero__title">
            Master <span>SAT</span>, <span>ACT</span> &amp; <span>EST</span><br>
            — one course at a time
        </h1>

        <p class="taly-hero__lead">
            Structured online prep for American School graduates. Each exam track contains subject courses — Math, English, Science, and more — so students study exactly what they need.
        </p>

        <div class="taly-hero__stats" aria-label="Program overview">
            <div class="taly-hero__stat">
                <strong>3</strong>
                <span>Exam tracks</span>
            </div>
            <div class="taly-hero__stat">
                <strong>12+</strong>
                <span>Subject courses</span>
            </div>
            <div class="taly-hero__stat">
                <strong>100%</strong>
                <span>Online &amp; self-paced</span>
            </div>
        </div>

        <div class="taly-hero__actions">
            <a href="#programs" class="taly-btn taly-btn--primary">
                Explore programs
                <i class="fas fa-arrow-down"></i>
            </a>
            @guest
                <a href="{{ route('student.sign_up') }}" class="taly-btn taly-btn--accent">Create free account</a>
            @else
                <a href="{{ route('courses') }}" class="taly-btn taly-btn--ghost">My courses</a>
            @endguest
        </div>
    </div>

    <div class="taly-hero__scroll" aria-hidden="true">
        <span>Scroll</span>
        <i class="fas fa-chevron-down"></i>
    </div>
</section>
