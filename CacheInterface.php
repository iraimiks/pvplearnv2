<?php
interface CacheInterface
{
    public function set(string $key,$values, int $duration);
    public function get();
}

