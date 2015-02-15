<?php

use phpish\app;
use phpish\template;

include_once MODELS_DIR . 'feedback.php';

app\get("/feedback/survey/{id}", function ($req) {
    $id = $req['matches']['id'];
    $data = Feedback::fetch_consolidated_reviewee_feedback_for($id, Session::get_user_property('username'));
    return template\compose("feedback/reviewee.html", compact('data'), "layout-no-sidebar.html");
});