<section class="taly-closing" aria-label="Get started with Taly">
    <div class="taly-closing__inner">
        <h2>Your journey to academic excellence starts here.</h2>
        <p>Join Taly and follow a clear path from diagnostic to exam day — with guidance built for SAT, ACT, and EST.</p>
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
