<?php

require('dnlib/load.php');

$action->helper->route('/', function () {

    global $action;

    $data['title'] = 'CV ONLINE - Make & Share CV Online';




    $action->view->load('content');
});

// For Home
$action->helper->route('home', function () {

    global $action;

    $action->onlyForAuthUsers();
    $data['title'] = 'Welcome to home';
    $data['myresume'] = 'active';

    $data['resumes'] = $action->db->readAll('resumes', '*', "WHERE user_id =" . $action->user_id());


    $action->view->load('home_content', $data);
});

// For Profil
$action->helper->route('profil', function () {

    global $action;

    $action->onlyForAuthUsers();
    $data['title'] = 'Welcome to home';
    $data['myresume'] = 'active';

    $data['resumes'] = $action->db->readAll('resumes', '*', "WHERE user_id =" . $action->user_id());


    $action->view->load('profil', $data);
});

// For Login
$action->helper->route('login', function () {

    global $action;

    $action->onlyForUnauthUsers();

    $data['title'] = 'Login - CV Online';



    $action->view->load('login_content');
});

// For Login action
$action->helper->route('action/login', function () {

    global $action;

    $error = $action->helper->isAnyEmpty($_POST);
    if ($error) {

        $action->session->set('error', "$error is empty !");
    } else {

        $email = $action->db->clean($_POST['email']);

        $password = $action->db->clean($_POST['password']);

        $user = $action->db->readAll('users', 'id, email_id', "WHERE email_id = '$email' AND password = '$password'");

        if (count($user) > 0) {

            $action->session->set('Auth', ['status' => true, 'data' => $user[0]]);

            $action->session->set('success', 'Connecté avec succès !');

            $action->helper->redirect('home');
        } else {
            $action->session->set('error', "Incorrect email/password");

            $action->helper->redirect('login');
        }
    }
});

// For Logout
$action->helper->route('action/logout', function () {

    global $action;

    $action->session->delete('Auth');
    $action->session->set('success', ' Déconnecté avec succès!');
    $action->helper->redirect('login');
});

// For sign-up
$action->helper->route('signup', function () {

    global $action;

    $action->onlyForUnauthUsers();

    $data['title'] = 'SignUp -CV Online';


    $action->view->load('signup_content');
});

// For sign-up action
$action->helper->route('action/signup', function () {

    global $action;
    $error = $action->helper->isAnyEmpty($_POST);


    if ($error) {
        $action->session->set('error', "$error is empty !");
        $action->helper->redirect('signup');
    } else {
        $signup_data[0] = $action->db->clean($_POST['full_name']);
        $email = filter_var($_POST['email']);
        $signup_data[1] = $action->db->clean($email);

        $signup_data[2] = $action->db->clean($_POST['password']);

        $user = $action->db->readAll('users', 'email_id', "WHERE email_id ='$signup_data[1]'");
        if (count($user) > 0) {

            $action->session->set('error', $signup_data[1] . ' est déja enregisté');
            $action->helper->redirect('signup');
        } else {

            $action->db->insert('users', 'full_name, email_id, password', $signup_data);

            $action->session->set('success', 'Compte créer avec succès !');

            $action->helper->redirect('login');
        }
    }
});

// For CV Builder
$action->helper->route('resume/$url/$modele/$id', function ($data) {

    global $action;

    $resumedata = $action->db->readAll("resumes", "*", "WHERE url = '" . $data['url'] . "'");
    $resumedata = $action->db->readAll("resumes", "*", "WHERE modele = '" . $data['modele'] . "'");
    $resumedata = $action->db->readAll("resumes", "*", "WHERE id = '" . $data['id'] . "'");

    if (!$resumedata) {

        $action->helper->redirect('home');
    }



    $resumedata = $resumedata[0];



    $data['resume'] = $resumedata;



    if ($data['modele'] ==  1) {
        $action->view->load('cv_content_1', $data);
    }
    if ($data['modele'] ==  2) {
        $action->view->load('cv_content_2', $data);
    }
});

// For Template
$action->helper->route('select_template', function () {

    global $action;

    $action->onlyForAuthUsers();
    $data['title'] = 'Select CV Template';
    $data['myresume'] = 'active';



    $action->view->load('template_content');
});

// For CV details
$action->helper->route('cv_details/1', function ($data) {

    global $action;

    $action->onlyForAuthUsers();
    $data['title'] = 'CV Details';
    $data['myresume'] = 'active';


    $action->view->load('cv_details_1');
});

// For CV details
$action->helper->route('cv_details/2', function ($data) {

    global $action;

    $action->onlyForAuthUsers();
    $data['title'] = 'CV Details';
    $data['myresume'] = 'active';


    $action->view->load('cv_details_2');
});

// For Create resume
$action->helper->route('action/createresume', function ($data) {

    global $action;


    $action->onlyForAuthUsers();

    if (!empty($_POST)) {
        if (
            isset(
                $_POST['name'],
                $_POST['firstname'],
                $_POST['email'],
                $_POST['location'],
                $_POST['xp'],
                $_POST['taux'],
                $_POST['formateur'],
                $_POST['headline'],
                $_POST['mobile'],
                $_POST['secteur'],
                $_POST['objective'],
                $_POST['modele'],
            ) && !empty($_POST['name'])
            && !empty($_POST['firstname'])
            && !empty($_POST['email'])
            && !empty($_POST['location'])
            && !empty($_POST['taux'])
            && !empty($_POST['formateur'])
            && !empty($_POST['headline'])
            && !empty($_POST['mobile'])
            && !empty($_POST['secteur'])
            && !empty($_POST['objective'])
            && !empty($_POST['xp'])
            && !empty($_POST['modele'])

        ) {
            $education = array();
            $colleges = $_POST['college'];

            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $folder = "assets/image/" . $image;



            $name = htmlspecialchars($_POST['name']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $email = htmlspecialchars($_POST['email']);
            $location = htmlspecialchars($_POST['location']);
            $xp = htmlspecialchars($_POST['xp']);
            $taux = htmlspecialchars($_POST['taux']);
            $formateur = htmlspecialchars($_POST['formateur']);
            $headline = htmlspecialchars($_POST['headline']);
            $mobile = htmlspecialchars($_POST['mobile']);
            $secteur = htmlspecialchars($_POST['secteur']);
            $objective = htmlspecialchars($_POST['objective']);
            $url = $action->helper->UID();
            $user_id = $action->session->get('Auth')['data']['id'];
            $modele = htmlspecialchars($_POST['modele']);
            foreach ($colleges as $key => $value) {
                $education[$key]['college'] = htmlspecialchars($value);
                $education[$key]['course'] = htmlspecialchars($_POST['course'][$key]);
                $education[$key]['e_duration'] = htmlspecialchars($_POST['e_duration'][$key]);
            }
            $education = json_encode($education);




            require_once('dnlib/class/db.php');

            $sql = "INSERT INTO `resumes` (`name`,`firstname`,`email`,`location`,`xp`,`taux`,`formateur`,`headline`,`mobile`,`secteur`,`objective`,`url`,`user_id`, `modele`,`education`,`image`) 
            VALUES (:name,:firstname,:email,:location,:xp,:taux,:formateur,:headline,:mobile,:secteur,:objective,:url,:user_id,:modele,:education,'$image')";

            $query = $db->prepare($sql);

            $query->bindValue(":name", $name, PDO::PARAM_STR);
            $query->bindValue(":firstname", $firstname, PDO::PARAM_STR);
            $query->bindValue(":email", $email, PDO::PARAM_STR);
            $query->bindValue(":location", $location, PDO::PARAM_STR);
            $query->bindValue(":xp", $xp, PDO::PARAM_INT);
            $query->bindValue(":taux", $taux, PDO::PARAM_STR);
            $query->bindValue(":formateur", $formateur, PDO::PARAM_STR);
            $query->bindValue(":headline", $headline, PDO::PARAM_STR);
            $query->bindValue(":mobile", $mobile, PDO::PARAM_STR);
            $query->bindValue(":secteur", $secteur, PDO::PARAM_STR);
            $query->bindValue(":objective", $objective, PDO::PARAM_STR);
            $query->bindValue(":url", $url);
            $query->bindValue(":user_id", $user_id);
            $query->bindValue(":modele", $modele);
            $query->bindValue(":education", $education);




            if (move_uploaded_file($tmp_name, $folder)) {
                $query->execute();
                $action->helper->redirect('home');
            };
        }
    }
});

// For Delete Resume
$action->helper->route('action/deleteresume/$url', function ($data) {

    global $action;

    $url = $data['url'];
    $action->db->delete('resumes', "url = '$url'");
    $action->session->set('success', 'Resume deleted successfully !');
    $action->helper->redirect('home');
});

// For Preview
$action->helper->route('preview', function () {

    global $action;

    $action->onlyForAuthUsers();





    $action->view->load('preview');
});


if (!Helper::$isPageIsAvailable) {
    global $action;

    $data['title'] = 'No Page Found';



    $action->view->load('not_found');
}
