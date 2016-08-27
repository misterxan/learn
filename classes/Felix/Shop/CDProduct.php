<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 24.08.16
 * Time: 0:08
 */

namespace Felix\Shop;


/**
 * Class CDProduct
 * @package Felix\Shop
 */
class CDProduct extends ShopProduct{
    private $playLength;

    /**
     * CDProduct constructor.
     * @param $title
     * @param $producerMainName
     * @param $producerFirstName
     * @param $price
     * @param $playLength
     */
    public function __construct($title, $producerMainName, $producerFirstName, $price, $playLength)
    {
        parent::__construct($title,$producerMainName,$producerFirstName,$price);
        $this->playLength = $playLength;
    }

    /**
     * @return string
     */
    public function getSummaryLine()
    {
        return parent::getSummaryLine().": Время звучания - {$this->getPlayLength()}";
    }

    /**
     * @return mixed
     */
    public function getPlayLength()
    {
        return $this->playLength;
    }

}