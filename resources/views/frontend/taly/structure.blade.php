<section class="taly-structure" id="structure" aria-labelledby="taly-structure-heading">
    <div class="taly-section-head taly-section-head--light">
        <span class="taly-section-head__eyebrow">How we're organized</span>
        <h2 id="taly-structure-heading">Track → Subject → Lessons &amp; quizzes</h2>
        <p>A clear hierarchy so students always know where they are in their prep journey.</p>
    </div>

    <div class="taly-structure__diagram">
        @foreach ($tracks as $track)
            <div class="taly-structure__tree taly-structure__tree--{{ $track['color'] }}">
                <div class="taly-structure__root">
                    <i class="fas fa-folder-open"></i>
                    <div>
                        <strong>{{ $track['code'] }} Track</strong>
                        <span>Parent category / exam umbrella</span>
                    </div>
                </div>
                <ul class="taly-structure__branch">
                    @foreach ($track['subjects'] as $subject)
                        <li>
                            <i class="fas {{ $subject['icon'] }}"></i>
                            <span>{{ $subject['name'] }}</span>
                            <em>Course</em>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</section>
