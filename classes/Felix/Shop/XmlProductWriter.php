<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 25.08.16
 * Time: 21:31
 */

namespace Felix\Shop;

class XmlProductWriter extends ShopProductWriter
{
    public function write()
    {
        $writer = new \XMLWriter();
        $writer->openMemory();
        $writer->startDocument("1.0","UTF-8");
        $writer->startElement("products");
        foreach ($this->products as $shopProduct) {
            $writer->startElement("product");
            $writer->writeAttribute("title", $shopProduct->getTitle());
            $writer->startElement("summery");
            $writer->text($shopProduct->getSummaryLine());
            $writer->endElement();
            $writer->endElement();
        }
        $writer->endElement();
        $writer->endDocument();
        print $writer->flush();
    }
}