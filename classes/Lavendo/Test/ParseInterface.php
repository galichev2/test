<?php

namespace Lavendo\Test;

interface ParseInterface
{
    /**
     * Установка названия Видеохостинга
     * @param string|null $strUrl
     * @return void
     */
    public function setStrUrl(string $strUrl);

    /**
     * Установка названия Видеохостинга
     * @param string|null $strUrl
     * @return void
     */
    public function setNameVideoHost(string $nameVideoHost);

    /**
     * Установка id video
     * @param string|null $idVideo
     * @return void
     */
    public function setIdVideo(string $idVideo);

    /**
     * Установка кода html video
     * @param string|null $htmlCodeVideo
     * @return void
     */
    public function setHtmlCodeVideo(string $htmlCodeVideo);

    /**
     * Получение названия хостинга
     * @return string
     */
    public function getNameVideoHost(): string;

    /**
     * Получение идентификатора видео
     * @return string
     */
    public function getIdVideo(): string;

    /**
     * Получение идентификатора видео
     * @return string
     */
    public function getHtmlCodeVideo(): string;

    /**
     * Получение дополнительный свойств
     * @return array
     */
    public function getProperties(): array;

}