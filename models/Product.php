<?php

/**
 * Класс Product - модель для работы с товарами
 */
class Product
{

    // Количество отображаемых товаров по умолчанию
    const SHOW_BY_DEFAULT = 5;

    /**
     * Возвращает массив последних товаров
     * @param type $count [optional] <p>Количество</p>
     * @param type $page [optional] <p>Номер текущей страницы</p>
     * @return array <p>Массив с товарами</p>
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, price, is_new, sale FROM product '
                . 'WHERE status = "1"  ORDER BY id ASC '
                . 'LIMIT :count';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['sale'] = $row['sale'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Возвращает список товаров в указанной категории
     * @param type $categoryId <p>id категории</p>
     * @param type $page [optional] <p>Номер страницы</p>
     * @return type <p>Массив с товарами</p>
     */
    public static function getProductsListByCategory($categoryId, $page = 1)
    {
        $limit = Product::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, price, is_new FROM product '
                . 'WHERE status = 1 AND category_id = :category_id '
                . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $products;
    }

    /**
     * Возвращает продукт с указанным id
     * @param integer $id <p>id товара</p>
     * @return array <p>Массив с информацией о товаре</p>
     */
    public static function getProductById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM product WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    /**
     * Возвращаем количество товаров в указанной категории
     * @param integer $categoryId
     * @return integer
     */
    public static function getTotalProductsInCategory($categoryId)
    {
        // з`эднання з БД
        $db = Db::getConnection();

        // Запрос до БД
        $sql = 'SELECT count(id) AS count FROM product WHERE status="1" AND category_id = :category_id';

        // Використання підготовленого запросу
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);

        // Виконання команди
        $result->execute();

        // Повернення значення count - кількість
        $row = $result->fetch();
        return $row['count'];
    }

    /**
     * Повернення списку товарів із вказаним ідентифікатором
     * @param array $idsArray <p>Масив з ідентифікатором</p>
     * @return array <p>Масив із списком товарів</p>
     */
    public static function getProdustsByIds($idsArray)
    {
        // з`єднання з БД
        $db = Db::getConnection();

        // Перетворюємо масив с рядок для формування умов в запросі
        $idsString = implode(',', $idsArray);

        // запрос до БД
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);

        // Вказуємо, що хочемо отримати дані у вигляді масиву
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Отримання і повернення результатів
        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }

    /**
     * Повертає список рекомендованих товарів Возвращает список рекомендуемых товаров
     * @return array <p>Масив з товарами</p>
     */
    public static function getRecommendedProducts()
    {
        // з`єднання з БД
        $db = Db::getConnection();

        // Отриманя і повернення результатів
        $result = $db->query('SELECT id, name, price, is_new FROM product '
                . 'WHERE status = "1" AND is_recommended = "1" '
                . 'ORDER BY id DESC');
        $i = 0;
        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Повертає список товарів
     * @return array <p>Масив з товарами</p>
     */
    public static function getProductsList()
    {
        // з`єднання з БД
        $db = Db::getConnection();

        // Отримання і повернення результатів
        $result = $db->query('SELECT id, name, price, code FROM product ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['code'] = $row['code'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }

    /**
     * Видаляє товар з вказаним id
     * @param integer $id <p>id товару</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function deleteProductById($id)
    {
        // з`єднання з БД
        $db = Db::getConnection();

        // Запрос до БД
        $sql = 'DELETE FROM product WHERE id = :id';

        // Отримання і повернення результатів. Використовується підготовлений запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактуємо това із заданимid
     * @param integer $id <p>id товару</p>
     * @param array $options <p>Масив з інформацією про товар</p>
     * @return boolean <p>Результат виконання методу</p>
     */
    public static function updateProductById($id, $options)
    {
        // з`єднання з БД
        $db = Db::getConnection();

        // Запрос до БД
        $sql = "UPDATE product
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_new = :is_new, 
                is_recommended = :is_recommended, 
                status = :status
            WHERE id = :id";

        // Отримання і повернення результатів. Використовується підготовлений запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Добавляє новий товар
     * @param array $options <p>Масив з інформацією про товар</p>
     * @return integer <p>id добавленого в таблицю записи</p>
     */
    public static function createProduct($options)
    {
        // з`єднання з БД
        $db = Db::getConnection();

        // запрос до БД
        $sql = 'INSERT INTO product '
                . '(name, code, price, category_id, brand, availability,'
                . 'description, is_new, is_recommended, status)'
                . 'VALUES '
                . '(:name, :code, :price, :category_id, :brand, :availability,'
                . ':description, :is_new, :is_recommended, :status)';

        // Отримання і повернення результатів. Використовується підготовлений запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Якщо запрос виконаний успішно, повертаємо id добавленого запису
            return $db->lastInsertId();
        }
        // якщо ны, то повертаэмо 0
        return 0;
    }

    /**
     * Повертаємо текстове пояснення наявності товару:<br/>
     * <i>0 - Під замовлення, 1 - В наявності</i>
     * @param integer $availability <p>Статус</p>
     * @return string <p>Текстове повідомлення</p>
     */
    public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'В наявності';
                break;
            case '0':
                return 'Під замовлення';
                break;
        }
    }

    /**
     * Повертаємо шлях до зображення
     * @param integer $id
     * @return string <p>Шлях до зображення</p>
     */
    public static function getImage($id)
    {
        // Назва зображення пустоти
        $noImage = 'no-image.jpg';

        // Шлях до папки з товарами
        $path = '/upload/images/products/';

        // Щлях до зображення товару
        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            // якщо зображення до товару присутнє
            // повертаємо шлях зображення товару
            return $pathToProductImage;
        }

        // повертаємо шлях зображення пустоти
        return $path . $noImage;
    }

}
