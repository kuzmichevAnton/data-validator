<?php

declare(strict_types=1);

namespace AntonKuzmicev\DataValidator;

class Validator {
    /**
     * Метод для проверки валидности email
     *
     * @param $email
     * @return bool
     */
    public static function isValidEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Метод для проверки валидности URL
     *
     * @param $url
     * @return bool
     */
    public static function isValidURL($url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * Метод для проверки валидности телефонного номера
     *
     * @param $number
     * @return bool
     */
    public static function isValidPhoneNumber($number): bool
    {
        // Пример простой проверки на номер из 10 цифр
        return preg_match('/^\d{10}$/', $number) === 1;
    }
}
