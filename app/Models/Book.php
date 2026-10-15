<?php

require_once 'Chapter.php';

class Book
{
    private string $title;
    /** @var Chapter[] 1..* */
    private array $chapters = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function addChapter(Chapter $chapter): void
    {
        $this->chapters[] = $chapter;
    }

    /** @return Chapter[] */
    public function getChapters(): array
    {
        return $this->chapters;
    }
}