<?php
class Anime extends DB
{
    private $title;
    private $release_year;
    private $type;
    private $episodes;
    private $studio;
    private $description;
    private $rating;
    private $image;

    public function __construct($id){
        parent::__construct();
        $sql = "select * from anime where anime_id = $id";
        $result = parent::getConn()->query($sql);
        $anime = $result->fetch_assoc();
        $this->title = $anime['title'];
        $this->release_year = $anime['release_year'];
        $this->type = $anime['type'];
        $this->episodes = $anime['episodes'];
        $this->studio = new Studio($anime['studio_id']);
        $this->description = $anime['description'];
        $this->rating = $anime['rating'];
        $this->image = $anime['image'];
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getReleaseYear()
    {
        return $this->release_year;
    }
    public function setReleaseYear($release_year)
    {
        $this->release_year = $release_year;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getEpisodes()
    {
        return $this->episodes;
    }
    public function setEpisodes($episodes)
    {
        $this->episodes = $episodes;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getRating()
    {
        return $this->rating;
    }
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getImageAnime()
    {
        return $this->image;
    }
    public function setImageAnime($image_anime)
    {
        $this->image = $image_anime;
    }

    public function getStudioId(){
        return $this->studio->getId();
    }
    public function setStudioId($id){
        $this->studio->setId($id);
    }

    public function getStudioName()
    {
        return $this->studio->getName();
    }
    public function setStudioName($studio)
    {
        $this->studio->setName($studio);
    }
    public function getImageStudio(){
        return $this->studio->getImage();
    }
    public function setImageStudio(){
        $this->studio->setImage();
    }
}