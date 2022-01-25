<?php
session_start();
requireValidSession();


$exception = null;
if(isset($_GET['delete'])) {
    try {
        Activity::deleteById($_GET['delete']);
        addSuccessMsg('Produtividade excluída com sucesso.');
    } catch(Exception $e) {
        if(stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Não é possível excluir a produtividade.');
        } else {
            $exception = $e;
        }
    }
}

$activities = Activity::get();


loadTemplateView('activity', [
    'activities' => $activities,
    'exception' => $exception
]);