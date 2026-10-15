<?php

require_once 'Word.php';

class Sentence
{
    private int $number;
    /** @var Word[] 1..* */
    private array $words = [];

    public function __construct(int $number)
    {
        $this->number = $number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function addWord(Word $word): void
    {
        $this->words[] = $word;
    }

    /** @return Word[] */
    public function getWords(): array
    {
        return $this->words;
    }
}