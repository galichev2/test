<?php

namespace Lavendo\Test;

class YoutuVideo extends BaseVideo
{
    protected string $strUrl;
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Установка url и параметров
     * @param string|null $strUrl
     * @return void
     */
    public function setStrUrl(string $strUrl)
    {
        $this->strUrl = $strUrl;

        $url_components = parse_url($strUrl);

        $this->setNameVideoHost($url_components['host']);

        $this->setIdVideo($url_components['path']);

        $this->setHtmlCodeVideo('https://www.youtube.com/embed/'.$this->getIdVideo());
    }
}

