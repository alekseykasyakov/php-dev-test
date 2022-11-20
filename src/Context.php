<?php

namespace silverorange\DevTest;

class Context
{
    // TODO: You can add more properties to this class to pass values to templates

    public string $title = '';

    public string $content = '';

    public string $body = '';

    public string $author = '';

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}
