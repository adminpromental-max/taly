<section class="taly-steps" id="how-it-works" aria-labelledby="taly-steps-heading">
    <div class="taly-section-head">
        <span class="taly-section-head__eyebrow">How it works</span>
        <h2 id="taly-steps-heading">From choosing a track to exam day</h2>
    </div>

    <div class="taly-steps__grid">
        @foreach ($how_it_works as $step)
            <article class="taly-step">
                <span class="taly-step__num">{{ $step['step'] }}</span>
                <h3>{{ $step['title'] }}</h3>
                <p>{{ $step['desc'] }}</p>
            </article>
        @endforeach
    </div>
</section>

<section class="taly-features" aria-labelledby="taly-features-heading">
    <div class="taly-section-head">
        <span class="taly-section-head__eyebrow">Inside the platform</span>
        <h2 id="taly-features-heading">Everything students need in one place</h2>
    </div>

    <div class="taly-features__grid">
        @foreach ($platform_features as $feature)
            <article class="taly-feature">
                <span class="taly-feature__icon"><i class="fas {{ $feature['icon'] }}"></i></span>
                <h3>{{ $feature['title'] }}</h3>
                <p>{{ $feature['desc'] }}</p>
            </article>
        @endforeach
    </div>
</section>
