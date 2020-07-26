<?php

namespace application\models;
use application\base\View;
use application\components\Db;
use application\components\Pagination;
use application\components\Router;
use application\components\Validator;

/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 13.07.2020
 * Time: 18:17
 */

class Post
{
    public $selected_sport;
    public $selected_country;
    public $post_title;
    public $post_slug;
    public $post_text;
    public $selected_important_news;
    public $selected_armenian_news;
    public $selected_for_banner;
    public $video_link;
    public $image;

    public $slug_error;

    public function __construct($post)
    {
        if (!empty($post['selected_sport'])){
            $this->selected_sport = $post['selected_sport'];
        }
        if (!empty($post['selected_country'])){
            $this->selected_country = $post['selected_country'];
        }
        if (!empty($post['post_title'])){
            $this->post_title = $post['post_title'];
        }
        if (!empty($post['post_slug'])){
            $this->post_slug = $post['post_slug'];
        }
        if (!empty($post['post_text'])){
            $this->post_text = $post['post_text'];
        }
        if (!empty($post['selected_important_news'])){
            $this->selected_important_news = $post['selected_important_news'];
        }
        if (!empty($post['selected_armenian_news'])){
            $this->selected_armenian_news = $post['selected_armenian_news'];
        }
        if (!empty($post['selected_for_banner'])){
            $this->selected_for_banner = $post['selected_for_banner'];
        }
        if (!empty($post['video_link'])){
            $this->video_link = $post['video_link'];
        }
        if (!empty($post['image'])){
            $this->image = $post['image'];
        }
    }

    public function rules(){
        return [
            'required' => [
                'selected_sport' => $this->selected_sport,
                'selected_country' => $this->selected_country,
                'post_title' => $this->post_title,
                'post_text' => $this->post_text,
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

    public static function getPosts($limit = 9999999999,$where = ''){
        $db = Db::getConnection();

        $result = $db->query("SELECT posts.*, sports.sport_name FROM posts
        LEFT JOIN sports ON posts.sport_id = sports.id $where ORDER BY id DESC LIMIT $limit");

        $i = 0;
        $posts = array();

        while ($row = $result->fetch()) {
            $posts[$i]['id'] = $row['id'];
            $posts[$i]['sport_id'] = $row['sport_id'];
            $posts[$i]['sport_name'] = $row['sport_name'];
            $posts[$i]['country_id'] = $row['country_id'];
            $posts[$i]['title'] = $row['title'];
            $posts[$i]['slug'] = $row['slug'];
            $posts[$i]['text'] = $row['text'];
            $posts[$i]['is_important'] = $row['is_important'];
            $posts[$i]['is_armenian_news'] = $row['is_armenian_news'];
            $posts[$i]['is_for_banner'] = $row['is_for_banner'];
            $posts[$i]['video_link'] = $row['video_link'];
            $posts[$i]['image'] = $row['image'];
            $posts[$i]['post_date'] = $row['post_date'];
            $i++;
        }

        return $posts;
    }

    public static function getPostsByCategory($id){
        $url = trim($_SERVER['REQUEST_URI'],'/');
        $arrUrl = explode('/', $url);
        $page = Router::getPage();
        $thisUri = $_SERVER['REQUEST_URI'];
        $category = Router::getSegment('2');

        if ($thisUri ==  "/category/$category"){
            View::redirect("/category/$category/page/1");
        }
        $pagination = new Pagination('/category/'.$arrUrl[1].'/page/','posts','4','4');
        $limit = $pagination->limit;
        $res_per_page = $pagination->result_per_page;
        $this_page_first_result = ($page - 1) * $res_per_page;

        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM posts WHERE posts.sport_id = '$id' ORDER BY id DESC  LIMIT $this_page_first_result,$limit");

        $i = 0;
        $posts = array();

        while ($row = $result->fetch()) {
            $posts[$i]['id'] = $row['id'];
            $posts[$i]['sport_id'] = $row['sport_id'];
            $posts[$i]['country_id'] = $row['country_id'];
            $posts[$i]['title'] = $row['title'];
            $posts[$i]['slug'] = $row['slug'];
            $posts[$i]['text'] = $row['text'];
            $posts[$i]['is_important'] = $row['is_important'];
            $posts[$i]['is_armenian_news'] = $row['is_armenian_news'];
            $posts[$i]['is_for_banner'] = $row['is_for_banner'];
            $posts[$i]['video_link'] = $row['video_link'];
            $posts[$i]['image'] = $row['image'];
            $posts[$i]['post_date'] = $row['post_date'];
            $i++;
        }

        return $posts;
    }

    public function createPost(){
        if(isset($_FILES) && $_FILES['post_image']['tmp_name'] != '' && $_FILES['post_image']['name'] != ''){

            $this->image = $_FILES['post_image']['name'];
            $fileTmpName = $_FILES['post_image']['tmp_name'];

            $this->dest = 'images/'.$this->image;
            move_uploaded_file($fileTmpName,$this->dest);
        }else{
            $this->image = 'noimage.png';
        }

        if ($this->validate() == [] && !self::checkSlugExists($this->post_slug) ){

            $create = Db::getConnection()->prepare("INSERT INTO posts (sport_id,country_id,title,slug,text,is_important,is_armenian_news,is_for_banner,video_link,image,post_date) VALUES 
                                ('$this->selected_sport','$this->selected_country','$this->post_title','$this->post_slug','$this->post_text','$this->selected_important_news','$this->selected_armenian_news','$this->selected_for_banner','$this->video_link','$this->image',CURRENT_TIME())");
            $create->execute();
            return true;
        }else{
            $_SESSION['slug_error'] = 'This slug already exist.';
            return false;
        }

    }

    public static function getPostBySlug($slug){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM posts WHERE slug = :slug';

        $result = $db->prepare($sql);
        $result->bindParam(':slug', $slug, \PDO::PARAM_STR);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public static function getPostById($id){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM posts WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);

        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
    }

    public function updatePostById($id){
        if(isset($_FILES) && $_FILES['post_image']['tmp_name'] != '' && $_FILES['post_image']['name'] != ''){

            $this->image = $_FILES['post_image']['name'];
            $fileTmpName = $_FILES['post_image']['tmp_name'];

            $this->dest = 'images/'.$this->image;
            move_uploaded_file($fileTmpName,$this->dest);
        }else{
            $this->image = 'noimage.png';
        }

        if ($this->validate() == []){
            $update = Db::getConnection()->prepare(
            "UPDATE `posts` SET `sport_id` = '$this->selected_sport',`country_id` = '$this->selected_country',
                    `title` = '$this->post_title',
                    `text` = '$this->post_text',`is_important` = '$this->selected_important_news',
                    `is_armenian_news` = '$this->selected_armenian_news', `is_for_banner` = '$this->selected_for_banner',
                    `video_link` = '$this->video_link', `image` = '$this->image' WHERE `posts`.`id` = '$id';");
            $update->execute();
            return true;
        }
        return false;
    }

    public static function deletePost($id){
        $db = Db::getConnection();

        $sql = 'DELETE FROM posts WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, \PDO::PARAM_INT);
        return $result->execute();
    }

    public static function checkSlugExists($slug)
    {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM posts WHERE slug = :slug';

        $result = $db->prepare($sql);
        $result->bindParam(':slug', $slug, \PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }
}