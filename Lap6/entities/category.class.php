<?php
require_once ('config/db.class.php');
/**
 *
 */
class Category
{
    public $cateID;
    public $categoryName;
    public $description;
    function __construct($cate_name, $desc)
    {
        $this->categoryName = $cate_name;
        $this->description = $desc;
    }

    // Get the product category category list
    public static function list_category()
    {
        $db = new Db();
        $sql = "SELECT CateID, CategoryName FROM category";
        $result = $db->select_to_array($sql);
        return $result;
    }
}
?>