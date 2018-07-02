<?php
namespace App\Classes\Abstracts;

abstract class BuildMedabot
{
    abstract public function build() : \App\Contracts\Medabot;
}