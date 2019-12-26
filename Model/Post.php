<?php

class Post implements JsonSerializable
{
    private $title;

    private $content;

    private $tags;

    public function __construct(string $title, string $content, array $tags)
    {
        $this->title = $title;
        $this->content = $content;
        $this->tags = $tags;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function content(): string
    {
        return $this->content;
    }

    public function tags(): array
    {
        return $this->tags;
    }

    public function changeTitle(string $newTitle): void 
    {
        $this->title = $newTitle;
    }

    public function jsonSerialize()
    {
        return [
        'title' => $this->title,
        'content' => $this->content,
        'tags' => $this->tags,
        ];
    }  
}  