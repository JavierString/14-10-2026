<?php

require_once 'Paragraph.php';

class Chapter
{
    private int $number;
    private string $title;
    /** @var Paragraph[] 1..* */
    private array $paragraphs = [];

    public function __construct(int $number, string $title)
    {
        $this->number = $number;
        $this->title = $title;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function addParagraph(Paragraph $paragraph): void
    {
        $this->paragraphs[] = $paragraph;
    }

    /** @return Paragraph[] */
    public function getParagraphs(): array
    {
        return $this->paragraphs;
    }
}