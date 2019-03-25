<?php

class Result
{
    /**
     * @var array
     */
    private $content;

    /**
     * @var int
     */
    private $statusCode;

    /**
     * @return array
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param array $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}