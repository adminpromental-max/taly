<section class="taly-programs" id="programs" aria-labelledby="taly-programs-heading">
    <div class="taly-section-head">
        <span class="taly-section-head__eyebrow">Our programs</span>
        <h2 id="taly-programs-heading">Three exam tracks. Subject courses inside each one.</h2>
        <p>SAT, ACT, and EST are the umbrella — Math, English, Science, and other subjects are the courses your students enroll in.</p>
    </div>

    <div class="taly-programs__tabs" role="tablist" aria-label="Exam tracks">
        @foreach ($tracks as $i => $track)
            <button
                type="button"
                role="tab"
                id="tab-{{ $track['slug'] }}"
                class="taly-programs__tab {{ $i === 0 ? 'is-active' : '' }}"
                aria-selected="{{ $i === 0 ? 'true' : 'false' }}"
                aria-controls="panel-{{ $track['slug'] }}"
                data-track-tab="{{ $track['slug'] }}"
            >
                <span class="taly-programs__tab-code">{{ $track['code'] }}</span>
                <span class="taly-programs__tab-name">{{ $track['name'] }}</span>
            </button>
        @endforeach
    </div>

    @foreach ($tracks as $i => $track)
        <article
            class="taly-programs__panel {{ $i === 0 ? 'is-active' : '' }}"
            id="panel-{{ $track['slug'] }}"
            role="tabpanel"
            aria-labelledby="tab-{{ $track['slug'] }}"
            data-track-panel="{{ $track['slug'] }}"
            @if($i !== 0) hidden @endif
        >
            <div class="taly-programs__layout">
                <div class="taly-programs__overview taly-programs__overview--{{ $track['color'] }}">
                    <span class="taly-programs__badge">{{ $track['code'] }}</span>
                    <h3>{{ $track['headline'] }}</h3>
                    <p class="taly-programs__intro">{{ $track['intro'] }}</p>

                    <dl class="taly-programs__meta">
                        <div>
                            <dt>Who it's for</dt>
                            <dd>{{ $track['who_for'] }}</dd>
                        </div>
                        <div>
                            <dt>Exam format</dt>
                            <dd>{{ $track['exam_format'] }}</dd>
                        </div>
                        <div>
                            <dt>Duration</dt>
                            <dd>{{ $track['duration'] }}</dd>
                        </div>
                    </dl>

                    <div class="taly-programs__sections">
                        <span class="taly-programs__sections-label">Exam sections</span>
                        <div class="taly-chip-row">
                            @foreach ($track['sections'] as $section)
                                <span class="taly-chip">{{ $section }}</span>
                            @endforeach
                        </div>
                    </div>

                    <ul class="taly-programs__includes">
                        @foreach ($track['includes'] as $item)
                            <li><i class="fas fa-check-circle"></i> {{ $item }}</li>
                        @endforeach
                    </ul>

                    <a href="{{ $track['url'] }}" class="taly-btn taly-btn--primary taly-btn--sm">
                        View all {{ $track['code'] }} courses
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="taly-programs__subjects">
                    <div class="taly-programs__subjects-head">
                        <h4>Subject courses inside {{ $track['code'] }}</h4>
                        <p>Each subject is a separate course students can enroll in individually or as part of a bundle.</p>
                    </div>

                    <div class="taly-subjects-grid">
                        @foreach ($track['subjects'] as $subject)
                            <a href="{{ $subject['url'] }}" class="taly-subject-card">
                                <span class="taly-subject-card__icon" aria-hidden="true">
                                    <i class="fas {{ $subject['icon'] }}"></i>
                                </span>
                                <h5>{{ $subject['name'] }}</h5>
                                <p>{{ $subject['desc'] }}</p>
                                <div class="taly-chip-row taly-chip-row--sm">
                                    @foreach ($subject['topics'] as $topic)
                                        <span class="taly-chip taly-chip--muted">{{ $topic }}</span>
                                    @endforeach
                                </div>
                                <span class="taly-subject-card__link">
                                    Open course <i class="fas fa-arrow-right"></i>
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</section>

@include('frontend.taly.structure')
