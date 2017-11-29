<?php

/**
 * Абстрактний клас AdminBase містить загальну логікку для контролерів, які використовуються в панелі адміністратора
 */
abstract class AdminBase
{

    /**
     * Метод, що перевіряє користувачи, чи є він адміністратором
     * @return boolean
     */
    public static function checkAdmin()
    {
        // Перевіряємо чи авторизований користувач. якщо ні, то переадресовуємо його
        $userId = User::checkLogged();

        // Отримуємо інформацію про поточного користувача
        $user = User::getUserById($userId);

        // якщо роль поточного користувача "admin", надаємо йому доступ в адмінпанель
        if ($user['role'] == 'admin') {
            return true;

        }

        // інакше завершуємо роботу з повідомленням про закриття доступу
        die('Доступ закритий');
    return $user;
    }

}
