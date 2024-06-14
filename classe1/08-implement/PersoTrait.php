<?php

trait PersoTrait{
    public function metEnMajuscule(?string $txt) : ?string
    {
        $text = mb_strtoupper($txt);
        return $text;
    }
}