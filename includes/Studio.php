<?php
class Studio extends DB
{
    private $id;
    private $name;
    private $image;
    public function __construct($id){
        parent::__construct();
        $sql = "select * from studio where studio_id = $id";
        $result = parent::getConn()->query($sql);
        $studio = $result->fetch_assoc();
        $this->id = $studio['studio_id'];
        $this->name = $studio['studio_name'];
        $this->image = $studio['image'];
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
}