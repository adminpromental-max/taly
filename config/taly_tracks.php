<?php

/**
 * Taly exam tracks, subject courses, and homepage content.
 * Parent categories in Admin: SAT | ACT | EST (slug: sat, act, est)
 * Child categories = subject courses listed below.
 */
return [

    'how_it_works' => [
        [
            'step'  => '01',
            'title' => 'Choose your exam track',
            'desc'  => 'Select SAT, ACT, or EST based on the universities and programs you are targeting.',
        ],
        [
            'step'  => '02',
            'title' => 'Pick subject courses',
            'desc'  => 'Enroll in Math, English, Science, and other courses inside your track — study what you need.',
        ],
        [
            'step'  => '03',
            'title' => 'Learn & practice',
            'desc'  => 'Video lessons, quizzes, assignments, and timed drills — all organized in one dashboard.',
        ],
        [
            'step'  => '04',
            'title' => 'Simulate & succeed',
            'desc'  => 'Full practice tests, progress tracking, and exam-day strategies to reach your target score.',
        ],
    ],

    'platform_features' => [
        ['icon' => 'fa-play-circle', 'title' => 'Structured video lessons', 'desc' => 'Step-by-step teaching aligned to each exam section.'],
        ['icon' => 'fa-clipboard-check', 'title' => 'Quizzes & assignments', 'desc' => 'Practice after every unit with instant scoring.'],
        ['icon' => 'fa-chart-line', 'title' => 'Progress tracking', 'desc' => 'See completion and performance across every course.'],
        ['icon' => 'fa-clock', 'title' => 'Timed practice', 'desc' => 'Build pacing and stamina for real exam conditions.'],
    ],

    'tracks' => [
        [
            'slug'            => 'sat',
            'code'            => 'SAT',
            'name'            => 'SAT Prep',
            'category_slug'   => 'sat',
            'color'           => 'sky',
            'headline'        => 'Digital SAT — your gateway to US universities',
            'intro'           => 'The SAT is the most widely used college admission test in the United States. Our SAT track prepares American School graduates for the Digital SAT with focused courses in Math and Reading & Writing — plus full-length practice and score-building strategies.',
            'who_for'         => 'Students applying to US, Canadian, and international universities that accept the SAT.',
            'exam_format'     => 'Two main sections: Reading & Writing, and Math. Computer-adaptive format with shorter passages and built-in calculator tools.',
            'duration'        => '~2 hours 14 minutes',
            'sections'        => ['Reading & Writing', 'Math'],
            'includes'        => ['Section-by-section courses', 'Topic drills & quizzes', 'Timed module practice', 'Score strategy guides', 'Full-length mock exams'],
            'subjects'        => [
                [
                    'name'          => 'SAT Math',
                    'slug'          => 'sat-math',
                    'icon'          => 'fa-square-root-alt',
                    'desc'          => 'Algebra, problem-solving, data analysis, and advanced math — from foundations to high-difficulty questions.',
                    'topics'        => ['Linear equations', 'Quadratics & functions', 'Geometry & trigonometry', 'Statistics & probability'],
                ],
                [
                    'name'          => 'SAT Reading & Writing',
                    'slug'          => 'sat-reading-writing',
                    'icon'          => 'fa-book-open',
                    'desc'          => 'Evidence-based reading, grammar, rhetoric, and vocabulary in the Digital SAT combined section.',
                    'topics'        => ['Reading comprehension', 'Command of evidence', 'Standard English conventions', 'Expression of ideas'],
                ],
                [
                    'name'          => 'SAT Essay & Writing Skills',
                    'slug'          => 'sat-writing',
                    'icon'          => 'fa-pen-fancy',
                    'desc'          => 'Optional enrichment for strong written communication — useful for applications and select programs.',
                    'topics'        => ['Essay structure', 'Argument development', 'Grammar refinement', 'Timed writing practice'],
                ],
            ],
        ],
        [
            'slug'            => 'act',
            'code'            => 'ACT',
            'name'            => 'ACT Prep',
            'category_slug'   => 'act',
            'color'           => 'navy',
            'headline'        => 'ACT — four sections, one strong score',
            'intro'           => 'The ACT tests English, Math, Reading, and Science — with an optional Writing section. Our ACT track breaks preparation into subject courses so students can focus on weak areas, build speed, and master the fast-paced format American universities expect.',
            'who_for'         => 'Students who prefer a straightforward multi-section test or are applying to ACT-friendly US colleges.',
            'exam_format'     => 'Four required sections (English, Math, Reading, Science) plus optional Writing. Fixed order, strict time limits per section.',
            'duration'        => '~2 hours 55 minutes (+ optional Writing)',
            'sections'        => ['English', 'Math', 'Reading', 'Science', 'Writing (optional)'],
            'includes'        => ['Per-section subject courses', 'Science reasoning drills', 'Pacing & strategy modules', 'Section timed tests', 'Full ACT simulations'],
            'subjects'        => [
                [
                    'name'          => 'ACT English',
                    'slug'          => 'act-english',
                    'icon'          => 'fa-language',
                    'desc'          => 'Grammar, punctuation, sentence structure, and rhetorical skills under time pressure.',
                    'topics'        => ['Usage & mechanics', 'Sentence structure', 'Strategy & pacing', 'Passage-based editing'],
                ],
                [
                    'name'          => 'ACT Math',
                    'slug'          => 'act-math',
                    'icon'          => 'fa-calculator',
                    'desc'          => 'Pre-algebra through trigonometry — 60 questions in 60 minutes requires speed and accuracy.',
                    'topics'        => ['Pre-algebra & arithmetic', 'Algebra & functions', 'Geometry', 'Trigonometry & modeling'],
                ],
                [
                    'name'          => 'ACT Reading',
                    'slug'          => 'act-reading',
                    'icon'          => 'fa-book-reader',
                    'desc'          => 'Four passage types — prose fiction, social science, humanities, and natural science.',
                    'topics'        => ['Main idea & detail', 'Inference & vocabulary', 'Comparative passages', 'Time management'],
                ],
                [
                    'name'          => 'ACT Science',
                    'slug'          => 'act-science',
                    'icon'          => 'fa-flask',
                    'desc'          => 'Data interpretation, research summaries, and conflicting viewpoints — not pure memorization.',
                    'topics'        => ['Charts & graphs', 'Experiments & variables', 'Biology & chemistry contexts', 'Scientific reasoning'],
                ],
                [
                    'name'          => 'ACT Writing',
                    'slug'          => 'act-writing',
                    'icon'          => 'fa-edit',
                    'desc'          => 'Optional essay: analyze perspectives and build a clear, supported argument in 40 minutes.',
                    'topics'        => ['Prompt analysis', 'Thesis & structure', 'Supporting examples', 'Editing under time'],
                ],
            ],
        ],
        [
            'slug'            => 'est',
            'code'            => 'EST',
            'name'            => 'EST Prep',
            'category_slug'   => 'est',
            'color'           => 'orange',
            'headline'        => 'EST — Egypt\'s path to university admission',
            'intro'           => 'The Egyptian Scholastic Test (EST) is designed for American Diploma students in Egypt seeking admission to Egyptian universities. Our EST track covers Literacy and Math with content built specifically for the local exam — not repurposed SAT material.',
            'who_for'         => 'American School graduates in Egypt applying to Egyptian public and private universities via EST scores.',
            'exam_format'     => 'Two core areas: EST Literacy (reading & language skills) and EST Math — aligned with Egyptian university requirements.',
            'duration'        => 'Varies by session (check official EST schedule)',
            'sections'        => ['Literacy', 'Math'],
            'includes'        => ['EST-specific question banks', 'Literacy & Math courses', 'Authentic-style drills', 'Arabic/English support notes', 'Mock EST sessions'],
            'subjects'        => [
                [
                    'name'          => 'EST Literacy',
                    'slug'          => 'est-literacy',
                    'icon'          => 'fa-spell-check',
                    'desc'          => 'Reading comprehension, vocabulary, grammar, and writing skills tailored to EST Literacy format.',
                    'topics'        => ['Reading passages', 'Vocabulary in context', 'Grammar & transitions', 'Writing conventions'],
                ],
                [
                    'name'          => 'EST Math',
                    'slug'          => 'est-math',
                    'icon'          => 'fa-divide',
                    'desc'          => 'Foundations through advanced topics — algebra, geometry, and problem-solving as tested on the EST.',
                    'topics'        => ['Number & operations', 'Algebra & equations', 'Geometry & measurement', 'Data & word problems'],
                ],
                [
                    'name'          => 'EST Biology Foundations',
                    'slug'          => 'est-biology',
                    'icon'          => 'fa-dna',
                    'desc'          => 'Core biology concepts that support science literacy questions and cross-curricular EST readiness.',
                    'topics'        => ['Cell biology', 'Genetics basics', 'Ecology & systems', 'Scientific terminology'],
                ],
                [
                    'name'          => 'EST English Skills',
                    'slug'          => 'est-english',
                    'icon'          => 'fa-globe',
                    'desc'          => 'Academic English reinforcement for students who need extra language support alongside Literacy prep.',
                    'topics'        => ['Academic vocabulary', 'Sentence clarity', 'Paragraph logic', 'Exam vocabulary lists'],
                ],
            ],
        ],
    ],

];
