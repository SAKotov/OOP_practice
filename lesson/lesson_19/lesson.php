<?php
require_once 'Cart.php';
require_once 'Product.php';
//Задача 25.1
//
//Сделайте класс Product (товар), в котором будут приватные свойства name (название товара),
// price (цена за штуку) и quantity. Пусть все эти свойства будут доступны только для чтения.
//
//Задача 25.2
//
//Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество).
//
//Задача 25.3
//
//Сделайте класс Cart (корзина). Данный класс будет хранить список продуктов (объектов класса Product) в виде массива.
// Пусть продукты хранятся в свойстве products.
//
//Задача 25.4
//
//Реализуйте в классе Cart метод add для добавления продуктов.
//
//Задача 25.5
//
//Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта.
//
//Задача 25.6
//
//Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.
//
//Задача 25.7
//
//Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов).
//
//Задача 25.8
//
//Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов).

$cart = new Cart();

$cart->addProduct(new Product('Шоколад', 200, 5));
$cart->addProduct(new Product('Кофе', 250, 3));
$cart->addProduct(new Product('Мороженое', 300, 10));

var_dump($cart->getProducts());

echo '<br>';
echo '<br>';
echo '<br>';

echo $cart->getTotalCost();
echo '<br>';
echo '<br>';
echo $cart->getAvgPrice();

