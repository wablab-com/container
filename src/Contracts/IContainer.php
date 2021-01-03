<?php


namespace WabLab\Container\Contracts;


interface IContainer
{
    public function make(string $className, array $constructorArguments = []);
}