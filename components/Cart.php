<?php

/**
 * Клас Cart
 * Компонент для роботи з корзиною
 */
class Cart
{

    /**
     * Добавлення товару в корзину (сессію)
     * @param int $id <p>id товару</p>
     * @return integer <p>Кількість товарів в корзині</p>
     */
    public static function addProduct($id)
    {
        // Приводимо $id до типу integer
        $id = intval($id);

        // Пустий масив для товарів в корзині
        $productsInCart = array();

        // якщо в корзині вже є товари (вони зберігаються в сессії)
        if (isset($_SESSION['products'])) {
            // Тоді заповнимо наш масив товарами
            $productsInCart = $_SESSION['products'];
        }

        // Перевіримо чи є вже такий товар в корзині
        if (array_key_exists($id, $productsInCart)) {
            // якщо такий   товар є в корзине, але був добавлений ще раз, збільшимо кількість на 1
            $productsInCart[$id] ++;
        } else {
            // якщо ні, добавляемо id нового товару в корзину з кількістю 1
            $productsInCart[$id] = 1;
        }

        // Записуємо масив з товарами в сесіюЗаписываем массив с товарами в сессию
        $_SESSION['products'] = $productsInCart;

        // Повертаємо кількість товарів в корзині
        return self::countItems();
    }

    /**
     * Підрахунок кількості товарів в корзині (в сесії)
     * @return int <p>Кількість товарів в корзині</p>
     */
    public static function countItems()
    {
        // Перевірка наявності товарів в корзині
        if (isset($_SESSION['products'])) {
            // Якщо масив з товарами є, то підрахуємо і повернемо їх кількість

            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            // якщо товарів немає, повернемо 0
            return 0;
        }
    }

    /**
     * Повертає масив з ідентифікаторами і кількістю товарів в корзині <br/>
     * Якщо товарів немає, повертає false;
     * @return mixed: boolean or array
     */
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    /**
     * Отримуємо загальну ціну переданих товарів
     * @param array $products <p>Масив із інформацією про товарих</p>
     * @return integer <p>Общая стоимость</p>
     */
    public static function getTotalPrice($products)
    {
        // Отримуємо масив з ідентифікаторами і кількістю товарів в корзині
        $productsInCart = self::getProducts();

        // Підраховуємо загальну ціну
        $total = 0;
        if ($productsInCart) {
            // Якщо в корзині не пусто, проходимо по переданому в метод масиву товарів
            foreach ($products as $item) {
                // Находимо загальну ціну:  ціна товару * кількість товарів
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    /**
     * Очищаємо корзину
     */
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    /**
     * Видаляємо товар із вказаним id з корзини
     * @param integer $id <p>id товару</p>
     */
    public static function deleteProduct($id)
    {
        // Отримуємо масив з ідентифікатороми і кількістю товарів в корзині
        $productsInCart = self::getProducts();



        if (array_key_exists($id, $productsInCart)) {
            // Якщо таких товарів в корзині більше 1
            if ($productsInCart[$id] > 1) {
                $productsInCart[$id]--;
            } else {
                // інакше видаляємо з масиву елемент з вказаним id
                unset($productsInCart[$id]);
            }
        }
            // Записуємо масив товарів с видаленим елементом в сесію
            $_SESSION['products'] = $productsInCart;
        }


}
