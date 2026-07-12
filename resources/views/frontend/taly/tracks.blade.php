@php
    $tracks = $tracks ?? [
        [
            'slug' => 'sat',
            'code' => 'SAT',
            'name' => 'SAT Prep',
            'desc' => 'Master Evidence-Based Reading & Writing and Math with structured lessons and timed practice.',
            'points' => ['Reading & Writing', 'Math (Algebra → Advanced)', 'Full-length practice tests'],
            'url' => route('courses') . '?track=sat',
        ],
        [
            'slug' => 'act',
            'code' => 'ACT',
            'name' => 'ACT Prep',
            'desc' => 'Build speed and accuracy across English, Math, Reading, and Science — section by section.',
            'points' => ['English & Reading', 'Math & Science', 'Pacing strategies'],
            'url' => route('courses') . '?track=act',
        ],
        [
            'slug' => 'est',
            'code' => 'EST',
            'name' => 'EST Prep',
            'desc' => 'Targeted preparation for Egyptian Scholastic Test Literacy and Math with focused drills.',
            'points' => ['Literacy skills', 'Math foundations', 'Exam-day readiness'],
            'url' => route('courses') . '?track=est',
        ],
    ];
@endphp

<section class="taly-tracks" id="tracks" aria-labelledby="taly-tracks-heading">
    <div class="taly-tracks__intro">
        <span class="taly-tracks__eyebrow">Choose your track</span>
        <h2 id="taly-tracks-heading">Three paths. One goal: university readiness.</h2>
        <p>Pick the exam you’re preparing for — every track is built for American School graduates aiming higher.</p>
    </div>

    <div class="taly-tracks__grid">
        @foreach ($tracks as $track)
            <a href="{{ $track['url'] }}" class="taly-track" id="track-{{ $track['slug'] }}">
                <span class="taly-track__badge">{{ $track['code'] }}</span>
                <h3 class="taly-track__name">{{ $track['name'] }}</h3>
                <p class="taly-track__desc">{{ $track['desc'] }}</p>
                <ul class="taly-track__meta">
                    @foreach ($track['points'] as $point)
                        <li><i class="fas fa-check"></i> {{ $point }}</li>
                    @endforeach
                </ul>
                <span class="taly-track__cta">
                    View {{ $track['code'] }} courses
                    <i class="fas fa-arrow-right"></i>
                </span>
            </a>
        @endforeach
    </div>
</section>
