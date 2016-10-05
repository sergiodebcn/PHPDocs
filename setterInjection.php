<?php 
 
class Product {
  
  private $stockItem;
  private $sku;
  
  public function __construct($sku){
    $this->sku        = $sku;
  }
  
  public function getStockItem(){
    return $this->stockItem;
  }
  
  public function getSku(){
    return $this->sku;
  }
  
  public function setStockItem(StockItem $stockItem){
    $this->stockItem = $stockItem;
  }
}