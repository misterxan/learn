<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 24.08.16
 * Time: 0:08
 */

namespace Felix\Shop;


use PDO;

class ShopProduct implements Chargeable,IdentityObject{
    const AVAILABLE = 0;
    const OUT_OF_STOCK = 1;
    private $id = 0;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount;
    use PriceUtilities, IdentityTrait, TaxTool{
        TaxTool::calculateTax insteadof PriceUtilities;
    }
    /**
     * ShopProduct constructor.
     * @param $title
     * @param $producerMainName
     * @param $producerFirstName
     * @param $price
     */
    public function __construct($title, $producerMainName, $producerFirstName, $price)
    {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    /**
     * @return mixed
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    /**
     * @return string $var
     */
    public function getProducer()
    {
        return "{$this->getProducerMainName()} {$this->getProducerFirstName()}";
    }
    /**
     * @return string $var
     */
    public function getSummaryLine()
    {
        return "{$this->getTitle()} ({$this->getProducerMainName()}, {$this->getProducerFirstName()})";
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param $id
     * @param PDO $pdo
     * @return BookProduct|CDProduct|ShopProduct|null
     */
    public static function getInstance($id, PDO $pdo){
        $stmt = $pdo->prepare("select * from products where id = ?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();
        if(empty($row)) return null;
        if($row["type"] === "book"){
            $product = new BookProduct($row["title"],$row["mainname"],$row["firstname"],$row["price"],$row["numpages"]);
        }else if($row["type"] === "cd"){
            $product = new CDProduct($row["title"],$row["mainname"],$row["firstname"],$row["price"],$row["playlength"]);
        }else{
            $product = new ShopProduct($row["title"],$row["mainname"],$row["firstname"],$row["price"]);
        }
        $product->setId($row["id"]);
        $product->setDiscount($row["discount"]);
        return $product;
    }
    public function getTaxRate(){
        return $this->taxrate;
    }


}