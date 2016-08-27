<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 24.08.16
 * Time: 0:08
 */

namespace Felix\Shop;


class BookProduct extends ShopProduct{
    private $numberOfPages;

    public function __construct($title, $producerMainName, $producerFirstName, $price, $numberOfPages)
    {
        parent::__construct($title,$producerMainName,$producerFirstName,$price);
        $this->numberOfPages = $numberOfPages;
    }
    /**
     * @return string
     */
    public function getSummaryLine()
    {
        return parent::getSummaryLine().": {$this->getNumberOfPages()} стр.";
    }

    /**
     * @return mixed
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    public function getPrice()
    {
        return $this->price;
    }
}