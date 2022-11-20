<?php

function redirect($location){
    header("location: {$location}");
    exit();
}

function date_beauty($date){
    $date = explode("-",$date);
    $months = array(
        "1" => "Januar",
        "2" => "Februar",
        "3" => "Mart",
        "4" => "April",
        "5" => "Maj",
        "6" => "Jun",
        "7" => "Jul",
        "8" => "Avgust",
        "9" => "Septembar",
        "10" => "Oktobar",
        "11" => "Novembar",
        "12" => "Decembar"
    );
    $day = $date[2];
    $day = (int)$day;
    $month = $date[1];
    $month = (int)$month;
    $month = $months[$month];
    $year = $date[0];
    $new_date = $day." ".$month." ".$year;
    return $new_date;
}

function get_anime($anime_id){
    $query = "SELECT * FROM animes WHERE anime_id = '$anime_id'";
    $anime = query($query);
    if ($anime->num_rows > 0) {
        $anime = $anime->fetch_assoc();
        $name = $anime['name'];
        $searching_name = $anime['searching_name'];
        $release_date = $anime['release_date'];
        $update_time = $anime['update_time'];
        $number_of_episodes = $anime['number_of_episodes'];
        $description = $anime['description'];
        $type_id = $anime['type_id'];
        $query = "SELECT type FROM types WHERE type_id = '$type_id'";
        $type = query($query);
        $type = $type->fetch_assoc()['type'];
        $title_id = $anime['title_id'];
        $query = "SELECT title FROM titles WHERE title_id = '$title_id'";
        $title = query($query);
        $title = $title->fetch_assoc()['title'];
        $status_id = $anime['status_id'];
        $query = "SELECT status FROM statuses WHERE status_id = '$status_id'";
        $status = query($query);
        $status = $status->fetch_assoc()['status'];
        $query = "SELECT * FROM images WHERE (anime_id = '$anime_id' AND image_type = 'classic') ORDER BY created_time DESC";
        $images = query($query);
        $image = $images->fetch_assoc()['image'];
        $query = "SELECT * FROM episodes WHERE anime_id = '$anime_id'";
        $current_episode_number = query($query);
        $current_episode_number = $current_episode_number->num_rows;
        $anime = [
            'anime_id' => $anime_id,
            'name' => $name,
            'searching_name' => $searching_name,
            'release_date' => $release_date,
            'update_time' => $update_time,
            'number_of_episodes' => $number_of_episodes,
            'description' => $description,
            'type_id' => $type_id,
            'type' => $type,
            'title_id' => $title_id,
            'title' => $title,
            'status_id' => $status_id,
            'status' => $status,
            'image' => $image,
            'current_episode_number' => $current_episode_number
        ];
    }
    return $anime;
}

function get_all_names(){
    $names = [];
    $query = "SELECT * FROM animes";
    $animes = query($query);
    foreach ($animes as $anime) {
        $names[] = $anime['name'];
        $searching_name = $anime['searching_name'];
        if (strlen($searching_name) > 0) {
            $searching_name_list = explode(";",$searching_name);
            foreach ($searching_name_list as $name) {
                $names[] = trim($name);
            }
        }
    }
    echo json_encode($names);
}



?>