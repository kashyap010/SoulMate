<?php
    session_start();
    include_once "/wamp64/www/dating-website/connection.php";

    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);


    $sql4 = "SELECT uid from usertable where unique_id='$_SESSION[unique_id]'";
    $query4 = mysqli_query($con, $sql4);
    $row4 = mysqli_fetch_assoc($query4);
    $current_user_uid = $row4['uid'];

    $matching_uids_list = Array();
    $sql_matches = "SELECT uid1, uid2 from `match` WHERE (uid1 = '$current_user_uid' OR uid2 = '$current_user_uid') AND status = 'match'";
    $sql_matches_res = mysqli_query($con, $sql_matches);
    while ($row = mysqli_fetch_assoc($sql_matches_res)) {
        $current_user_uid == $row['uid1'] ? $uid2 = $row['uid2'] : $uid2 = $row['uid1'];
        array_push($matching_uids_list, $uid2);
    }
    $matching_uids_list = implode(",", $matching_uids_list);

    #$sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    $sql = "select * from usertable ut, userprofile up where (ut.uid = up.uid) and (ut.unique_id != '$outgoing_id') and (name like '%$searchTerm%') and ut.uid in ($matching_uids_list)";
    $output = "";
    $query3 = mysqli_query($con, $sql);
    if(mysqli_num_rows($query3) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>