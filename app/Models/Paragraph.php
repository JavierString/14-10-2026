<?php

require_once 'Sentence.php';

class Paragraph
{
    private int $number;
    /** @var Sentence[] 1..* */
    private array $sentences = [];

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function addSentence(Sentence $sentence): void
    {
        $this->sentences[] = $sentence;
    }

    /** @return Sentence[] */
    public function getSentences(): array
    {
        return $this->sentences;
    }
}