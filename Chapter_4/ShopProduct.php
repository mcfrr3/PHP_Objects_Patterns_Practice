<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 9/14/17
 * Time: 11:25 AM
 */

class ShopProduct implements IdentityObject
{
    use PriceUtilities, IdentityTrait;

    private $id = 0;
    protected $price;

    public function setID(int $id)
    {
        $this->id = $id;
    }

    public static function getInstance(int $id, \PDO $pdo): ShopProduct
    {
        $stmt = $pdo->prepare("select * from products where id=?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();
        if (empty($row)) {
            return null;
        }

        if ($row['type'] == "book") {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['numpages']
            );
        } elseif ($row['type'] == "cd") {
            $product = new CdProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['playlength']
            );
        } else {
            $firstname = (is_null($row['firstname'])) ? "" : $row['firstname'];
            $product = new ShopProduct(
                $row['title'],
                $firstname,
                $row['mainname'],
                (float) $row['price']
            );
        }

        $product->setID((int) $row['id']);
        $product->setDiscount((int) $row['discount']);

        return $product;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
