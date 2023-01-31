<?php

namespace Lavendo;

use Lavendo\Test\ParseInterface;
use Lavendo\Psr\ContainerInterface;
use Lavendo\Test\VimeoVideo;
use Lavendo\Test\YoutubeVideo;
use Lavendo\Test\YoutuVideo;

class Container implements ContainerInterface
{
    private array $videosObj = [];

    private $itemVideo;

    public function __construct()
    {
        $this->videosObj = [
            'www.youtube.com' => new YoutubeVideo(),
            'youtu.be' =>  new YoutuVideo(),
            'vimeo.com' => new VimeoVideo()
        ];
    }

    /**
     * return ParseInterface
     */
    public function get(string $id)
    {

        return $this->videosObj[$this->getItemVideo($id)];
    }

    /**
     * @inheritDoc
     */
    public function has(string $id): bool
    {
        return isset($this->videosObj[$this->getItemVideo($id)]);
    }

    private function getItemVideo($id){

        $url_components = parse_url($id);

        $itemObj = $url_components['host'];

        return $itemObj;

    }
}