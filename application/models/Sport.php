<?php

namespace application\models;
use application\components\Db;
use application\components\Validator;

/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 14.07.2020
 * Time: 14:55
 */

class Sport
{
    private $sport_name;
    private $icon_image;

    public function __construct($post){
        if (!empty($post['sport_name'])){
            $this->sport_name = $post['sport_name'];
        }
        if (!empty($post['icon_image'])){
            $this->icon_image = $post['icon_image'];
        }
    }

    public function rules()
    {
        return [
            'required' => [
                'sport_name' => $this->sport_name,
                'icon_image' => $this->icon_image,
            ]
        ];
    }

    public function validate(){
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())){
            return $validator->validate();
        }
        return [];
    }

    public function createSport(){
        if ($this->validate() == []){

            $create = Db::getConnection()->prepare("INSERT INTO sports (sport_name,icon_image) VALUES 
                                ('$this->sport_name','$this->icon_image')");
            $create->execute();
            return true;
        }
        return false;
    }

    public static function getSports(){
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM sports");

        $i = 0;
        $sports = array();

        while ($row = $result->fetch()) {
            $sports[$i]['id'] = $row['id'];
            $sports[$i]['sport_name'] = $row['sport_name'];
            $sports[$i]['slug'] = $row['slug'];
            $sports[$i]['icon_image'] = $row['icon_image'];
            $i++;
        }

        return $sports;
    }

    public static function getSportById($id){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM sports WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getSportBySlug($slug){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM sports WHERE slug = :slug';

        $result = $db->prepare($sql);
        $result->bindParam(':slug', $slug, \PDO::PARAM_STR);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public function updateSportById($id){
        if ($this->validate() == []){
            $update = Db::getConnection()->prepare(
                "UPDATE `sports` SET `sport_name` = '$this->sport_name', `icon_image` = '$this->icon_image' WHERE `sports`.`id` = '$id';");
            $update->execute();
            return true;
        }
        return false;
    }

    public static function deleteSport($id){
        $db = Db::getConnection();

        $sql = 'DELETE FROM sports WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        return $result->execute();
    }

}