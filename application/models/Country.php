<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 18.07.2020
 * Time: 17:44
 */

namespace application\models;


use application\components\Db;
use application\components\Validator;

class Country
{
    private $country_name;

    public function __construct($post){
        if (!empty($post['country_name'])){
            $this->country_name = $post['country_name'];
        }
    }

    public function rules()
    {
        return [
            'required' => [
                'country_name' => $this->country_name,

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

    public function createCountry(){
        if ($this->validate() == []){

            $create = Db::getConnection()->prepare("INSERT INTO countries (country_name) VALUES 
                                ('$this->country_name')");
            $create->execute();
            return true;
        }
        return false;
    }
    public static function getCountries(){
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM countries");

        $i = 0;
        $countries = array();

        while ($row = $result->fetch()) {
            $countries[$i]['id'] = $row['id'];
            $countries[$i]['country_name'] = $row['country_name'];
            $i++;
        }
        return $countries;
    }

    public static function getCountryById($id){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM countries WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getCountryBySlug($slug){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM countries WHERE slug = :slug';

        $result = $db->prepare($sql);
        $result->bindParam(':slug', $slug, \PDO::PARAM_STR);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public function updateCountryById($id){
        if ($this->validate() == []){
            $update = Db::getConnection()->prepare(
                "UPDATE `countries` SET `country_name` = '$this->country_name' WHERE `countries`.`id` = '$id';");
            $update->execute();
            return true;
        }
        return false;
    }

    public static function deleteCountry($id){
        $db = Db::getConnection();

        $sql = 'DELETE FROM countries WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        return $result->execute();
    }

}