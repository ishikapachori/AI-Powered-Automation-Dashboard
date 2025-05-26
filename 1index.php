    <?php
    // File: index.php (in htdocs root)

    // Tool mapping configuration
    $toolMap = [
        'grammar-checker' => ['folder' => 'grammar-checker', 'file' => 'index.html'],
    'paraphrasing-tool' => ['folder' => 'paraphraser_tool', 'file' => 'index.html'],
    'summarizer' => ['folder' => 'summarizer', 'file' => 'index.html'],
    'text-to-emoji' => ['folder' => 'text-to-emoji-converter', 'file' => 'text-to-emoji-converter.html'],
    'text-tone-changer' => ['folder' => 'text-tone-changer', 'file' => 'text_tone_changer.html'],

    // Education Tools
    'question-generator' => ['folder' => 'question-generator', 'file' => 'question-generator.html'],
    'eli5' => ['folder' => 'eli5', 'file' => 'index.html'],
    'flashcard-generator' => ['folder' => 'flashcard-generator', 'file' => 'index.html'],

    // AI Writing Assistant
    'email-generator' => ['folder' => 'email-generator', 'file' => 'index.html'],
    'blog-idea-expander' => ['folder' => 'blog_idea_expander', 'file' => 'index.html'],
    'script-dialog-generator' => ['folder' => 'script_dialog_generator', 'file' => 'index.html'],
    'resume-cover-letter-generator' => ['folder' => 'resume-generator', 'file' => 'index.html'],

    // Multilingual & Culture
    'cross-cultural-greeting' => ['folder' => 'cross-cultural-greeting', 'file' => 'index.html'],

    // Add the rest the same way
    'idiom-explainer' => ['folder' => 'idiom-explainer', 'file' => 'index.html'],
    'language-quiz' => ['folder' => 'language-quiz', 'file' => 'index.html'],
    'mental_health' => ['folder' => 'mental_health', 'file' => 'index.html'],
    'custom-chatbot' => ['folder' => 'custom-chatbot', 'file' => 'index.html'],
    'news-headline' => ['folder' => 'news-headline', 'file' => 'index.html'],
    'voiceover' => ['folder' => 'voiceover', 'file' => 'index.html'],
    'translation-validator' => ['folder' => 'translation-validator', 'file' => 'index.html'],
    'smart-letter-generator' => ['folder' => 'smart-letter-generator', 'file' => 'index.html'],
    'summarytool' => ['folder' => 'summarytool', 'file' => 'index.html'],
    'email_assistant' => ['folder' => 'email_assistant', 'file' => 'index.html'],
    'report-writer' => ['folder' => 'report-writer', 'file' => 'index.html'],
    'template-filler' => ['folder' => 'template-filler', 'file' => 'index.html'],
    'meeting-agenda-generator' => ['folder' => 'meeting-agenda-generator', 'file' => 'index.html'],
    'MoM' => ['folder' => 'MoM', 'file' => 'index.html'],
    'follow-up-tracker' => ['folder' => 'follow-up-tracker', 'file' => 'index.html'],
    'multilingual_translation_assistant' => ['folder' => 'multilingual_translation_assistant', 'file' => 'index.html'],
    'speech_to_note_transcriber' => ['folder' => 'speech_to_note_transcriber', 'file' => 'index.html'],
    'CV-Analyzer' => ['folder' => 'CV-Analyzer', 'file' => 'index.html'],
    'interview-generator' => ['folder' => 'interview-generator', 'file' => 'index.html'],
    'performance-feedback-writer' => ['folder' => 'performance-feedback-writer', 'file' => 'performance_feedback.html'],
    'leave-responder' => ['folder' => 'leave-responder', 'file' => 'index.html'],
    'employee_profile_summary' => ['folder' => 'employee_profile_summary', 'file' => 'employee_profile_summary.html'],
    'task-generator' => ['folder' => 'task-generator', 'file' => 'index.html'],
    'status-report-formatter' => ['folder' => 'status-report-formatter', 'file' => 'index.html'],
    'decision_support_bot' => ['folder' => 'decision_support_bot', 'file' => 'index.html'],
    'deadline_reminder' => ['folder' => 'deadline_reminder', 'file' => 'deadline_reminder.html'],
    'policy-checker' => ['folder' => 'policy-checker', 'file' => 'index.html'],
    'meeting_attendace_analyzer' => ['folder' => 'meeting_attendace_analyzer', 'file' => 'index.html'],
    'budget_summary_writer' => ['folder' => 'budget_summary_writer', 'file' => 'budget_summary_writer.html'],
    'justification-tool' => ['folder' => 'justification-tool', 'file' => 'index.html'],
    'asset-request' => ['folder' => 'asset-request', 'file' => 'asset_request.html'],
    'travel-itinerary-assistant' => ['folder' => 'travel-itinerary-assistant', 'file' => 'index.html'],
    'internal-policy-chatbot' => ['folder' => 'internal-policy-chatbot', 'file' => 'index.html'],
    'compliance-checklist-generator' => ['folder' => 'compliance-checklist-generator', 'file' => 'index.html'],
    'onboarding-guide-creator' => ['folder' => 'onboarding-guide-creator', 'file' => 'index.html'],
    'file-note-generator' => ['folder' => 'file-note-generator', 'file' => 'index.html'],
    'RTI' => ['folder' => 'RTI', 'file' => 'index.html']
    ];

    // Check if a tool is selected
    if (isset($_GET['tool']) && array_key_exists($_GET['tool'], $toolMap)) {
        $tool = $_GET['tool'];
        $folder = $toolMap[$tool]['folder'];
        $file = $toolMap[$tool]['file'];
        
        // Redirect to the appropriate tool
        header("Location: $folder/$file");
        exit;
    }

    // If no tool is selected or invalid tool, show the dashboard
    include 'dash.html';
    ?>
