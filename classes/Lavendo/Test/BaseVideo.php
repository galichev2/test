<?php

namespace Lavendo\Test;

abstract class BaseVideo implements ParseInterface
{
    protected $nameVideoHost;
    protected $idVideo;
    protected $htmlCodeVideo;
    protected array $videoProperties = [];

    /**
     * Массив ошибок
     * @var array
     */
    protected array $errors = [];

    public function __construct()
    {

    }

    /**
     * Установка ошибки
     * @param string $error
     * @return void
     */
    protected function setError(string $error)
    {
        $this->errors[] = $error;
    }

    /**
     * Получение массива ошибок
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Установка названия Видеохостинга
     * @param string|null $strUrl
     * @return void
     */
    public function setStrUrl(string $strUrl)
    {
        $this->strUrl = $strUrl;
    }

    /**
     * Установка названия Видеохостинга
     * @param string|null $strUrl
     * @return void
     */
    public function setNameVideoHost(string $nameVideoHost)
    {
        $this->nameVideoHost = $nameVideoHost;
    }

    /**
     * Установка id video
     * @param string|null $idVideo
     * @return void
     */
    public function setIdVideo(string $idVideo)
    {
        $this->idVideo = $idVideo;
    }

    /**
     * Установка кода html video
     * @param string|null $htmlCodeVideo
     * @return void
     */
    public function setHtmlCodeVideo(string $htmlCodeVideo)
    {
        $this->htmlCodeVideo = $htmlCodeVideo;
    }

    /**
     * Получение названия хостинга
     * @return string
     */
    public function getNameVideoHost(): string
    {
         return $this->nameVideoHost;
    }
    /**
     * Получение идентификатора видео
     * @return string
     */
    public function getIdVideo(): string
    {
        return $this->idVideo;
    }


    /**
     * Получение идентификатора видео
     * @return string
     */
    public function getHtmlCodeVideo(): string
    {
        return "<iframe id='player' type='text/html' width='640' height='360'
          src='".$this->htmlCodeVideo."'
          frameborder='0'></iframe>";
    }

    /**
     * Установка дополнительных свойств в виде массива в массив $videoProperties
     * @param array $videoProperties
     * @return void
     */
    protected function setProperties(array $videoProperties)
    {
        if(!empty($videoProperties))
            $this->videoProperties[] = $videoProperties;
    }

    /**
     * Получение дополнительный свойств
     * @return array
     */
    public function getProperties(): array
    {
        return $this->videoProperties;
    }
}