<?php
session_start();
requireValidSession();

$exception = null;
$activityData = [];

if(count($_POST) === 0 && isset($_GET['update'])) {
    $activity = Activity::getOne(['id' => $_GET['update']]);
    $activityData = $activity->getValues();
} elseif(count($_POST) > 0) {
    try {
        $dbActivity = new Activity($_POST);
        if($dbActivity->id) {
            $dbActivity->update();
            addSuccessMsg('Produtividade alterada com sucesso!');
            header('Location:activity.php');
            exit();
        } else {
            $dbActivity->insert();
            addSuccessMsg('Produtividade cadastrada com sucesso!');
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $dbActivity = $_POST;
    }
}

loadTemplateView('save_activity', $dbActivity + ['exception' => $exception]);