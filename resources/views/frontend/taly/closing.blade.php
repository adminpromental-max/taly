<section class="taly-closing" aria-label="Get started">
    <div class="taly-closing__inner">
        <h2>Ready to start your {{ $tracks[0]['code'] ?? 'SAT' }}, {{ $tracks[1]['code'] ?? 'ACT' }}, or {{ $tracks[2]['code'] ?? 'EST' }} journey?</h2>
        <p>Pick your exam track, enroll in the subject courses you need, and follow a clear path from first lesson to exam day.</p>
        @guest
            <a href="{{ route('student.sign_up') }}" class="taly-btn taly-btn--accent">
                Create your account
                <i class="fas fa-arrow-right"></i>
            </a>
        @else
            <a href="{{ route('courses') }}" class="taly-btn taly-btn--primary">
                Continue learning
                <i class="fas fa-arrow-right"></i>
            </a>
        @endguest
    </div>
</section>
