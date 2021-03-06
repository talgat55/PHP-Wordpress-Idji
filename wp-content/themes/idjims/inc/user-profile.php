<?php
/**
 * Created by PhpStorm.
 * User: talgat
 * Date: 04.03.2018
 * Time: 18:35
 */

if (isset($_POST['user_profile_reg_submit'])) {
    $firstName = $_POST['firstName'];
    $secondName = $_POST['secondName'];
    $lastName = $_POST['lastName'];
    $birdDay = $_POST['birdDay'];
    $placeBirdDay = $_POST['placeBirdDay'];
    $PreviousFirstName = $_POST['PreviousFirstName'];
    $PlaceLive = $_POST['PlaceLive'];
    $NumberPassport = $_POST['NumberPassport'];
    $SeriaPassport = $_POST['SeriaPassport'];
    $WhoGetPassport = $_POST['WhoGetPassport'];
    $datPassport = $_POST['datPassport'];
    $KeyDepartmentPassport = $_POST['KeyDepartmentPassport'];
    $additionalInn = $_POST['additionalInn'];
    $additionalSnils = $_POST['additionalSnils'];
    $additionalPhone = $_POST['additionalPhone'];
    $additionalEmail = $_POST['additionalEmail'];
    $registrationIndex = $_POST['registrationIndex'];
    $registrationRegion = $_POST['registrationRegion'];
    $registrationPoint = $_POST['registrationPoint'];
    $registrationStreet = $_POST['registrationStreet'];
    $registrationNumberHouse = $_POST['registrationNumberHouse'];
    $registrationNumberKorpus = $_POST['registrationNumberKorpus'];
    $registrationNumberOportoment = $_POST['registrationNumberOportoment'];


    global $wpdb;
    $cur_user_id = get_current_user_id();
    checkUser(); // check logged user
    $table_name = $wpdb->prefix . "addition_informaion";

    $results = $wpdb->get_results("SELECT * FROM " . $table_name . " WHERE id_user ='" . $cur_user_id . "'");

    if (empty($results[0])) {
        $wpdb->query($wpdb->prepare(
            "INSERT INTO `" . $table_name . "` (id, id_user, first_name, second_name, third_name, bird_day, place_bird, last_name, place_live, passport_serial, passport_number, passport_issued_by, passport_issued_date, passport_issued_key , extra_inn , extra_snils, extra_phone, extra_email, registrtation_index, registrtation_city, registrtation_locality, registrtation_street, registrtation_number_hourse, registrtation_number_housing, registrtation_number_apartments) VALUES (
         %d, %d, %s, %s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s, %s)",
            array(
                0,
                $cur_user_id,
                $firstName,
                $secondName,
                $lastName,
                $birdDay,
                $placeBirdDay,
                $PreviousFirstName,
                $PlaceLive,
                $SeriaPassport,
                $NumberPassport,
                $WhoGetPassport,
                $datPassport,
                $KeyDepartmentPassport,
                $additionalInn,
                $additionalSnils,
                $additionalPhone,
                $additionalEmail,
                $registrationIndex,
                $registrationRegion,
                $registrationPoint,
                $registrationStreet,
                $registrationNumberHouse,
                $registrationNumberKorpus,
                $registrationNumberOportoment
            )
        ));
    }else{

        $wpdb->update( $table_name,
            array(
                'first_name' =>  $firstName,
                'second_name' =>  $secondName,
                'third_name' =>  $lastName,
                'bird_day' =>  $birdDay,
                'place_bird' =>  $placeBirdDay,
                'last_name' =>  $PreviousFirstName,
                'place_live' =>  $PlaceLive,
                'passport_serial' =>  $SeriaPassport,
                'passport_number' =>  $NumberPassport,
                'passport_issued_by' =>  $WhoGetPassport,
                'passport_issued_date' =>  $datPassport,
                'passport_issued_key' =>  $KeyDepartmentPassport,
                'extra_inn' =>  $additionalInn,
                'extra_snils' =>  $additionalSnils,
                'extra_phone' =>  $additionalPhone,
                'extra_email' =>  $additionalEmail,
                'registrtation_index' =>  $registrationIndex,
                'registrtation_city' =>  $registrationRegion,
                'registrtation_locality' =>  $registrationPoint,
                'registrtation_street' =>  $registrationStreet,
                'registrtation_number_hourse' =>  $registrationNumberHouse,
                'registrtation_number_housing' =>  $registrationNumberKorpus,
                'registrtation_number_apartments' => $registrationNumberOportoment
            ),
            array( 'id_user' => $cur_user_id )
        );
    }
//
// Change pasword
//

    if ($_POST['accessNewPassword']) {

        wp_set_password($_POST['accessNewPassword'], $cur_user_id);

    }

    wp_redirect(LinksTheme('user-doc'));
    exit;
}