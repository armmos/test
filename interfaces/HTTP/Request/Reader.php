<?php

namespace HTTP\Request;

/**
 * Интерфейс реализует методы для получения параметров HTTP запроса
 * 
 * @version 1.0
 * @package \HTTP\Request
 */
interface Reader
{

    /**
     * Метод должен возвращать название протокола.
     * 
     * @return string
     */
    public function getProtocol(): string;

    /**
     * Метод должен возвращать название метода.
     * 
     * @return string
     */
    public function getMethod(): string;

    /**
     * Метод должен возвращать значение заголовка.
     * 
     * @return string
     */
    public function getHeader(string $name): string;

    /**
     * Метод должен возвращать схему запроса.
     * 
     * @return string - http|https
     */
    public function getScheme(): string;

    /**
     * Метод должен возвращать имя пользователя 
     * если в запросе используется HTTP авторизация.
     * 
     * @return string
     */
    public function getUser(): string;

    /**
     * Метод должен возвращать пароль если 
     * в запросе используется HTTP авторизация.
     * 
     * @return string
     */
    public function getPassword(): string;

    /**
     * Метод должен возвращать название хоста.
     * 
     * @return string
     */
    public function getHost(): string;

    /**
     * Метод должен возвращать путь к запрашиваемому ресурсу.
     * 
     * @return string
     */
    public function getPath(): string;

    /**
     * Метод должен возвращать параметры указанные после знака (?).
     * 
     * @return string
     */
    public function getQuery(): string;

    /**
     * Метод должен возвращать длину тела запроса в байтах.
     * 
     * @return int
     */
    public function getContentLength(): int;

    /**
     * Метод должен возвращать тело запроса.
     * 
     * @uses \HTTP\Request::getContentLength() - разрешается применить
     * 
     * @return string
     */
    public function getContent(): string;

    /**
     * Метод должен возвращать полное или базовое название скрипта 
     * на который поступил запрос.
     * 
     * @param bool $fullpath - признак того что нужно вернуть полный путь
     * 
     * @return string
     */
    public function getScript(bool $fullpath = false): string;
    
    
    /**
     * Метод должен возвращать IP адрес клиента от которого пришёл запрос.
     * 
     * @return string
     */
    public function getClientIP():string;
    
    /**
     * Метод должен возвращать IP адрес хоста на который пришёл запрос.
     * 
     * @return string
     */
    public function getServerIP():string;
    
    /**
     * Метод должен возвращать HTTP_USER_AGENT клиента от которого пришёл запрос
     * 
     * @return string
     */
    public function getClientUserAgent():string;
    
    /**
     * Метод должен возвращать название типа устройства.
     * 
     * @return string
     */
    public function getClientDeviceTypeName(): string;
}
