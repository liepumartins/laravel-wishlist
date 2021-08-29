<?php

namespace Dive\Wishlist\Contracts;

use Dive\Wishlist\Wish;
use Dive\Wishlist\WishCollection;

interface Wishlist
{
    public function add(Wishable $wishable): Wish;

    public function all(): WishCollection;

    public function count(): int;

    public function has(Wishable $wishable): bool;

    public function isEmpty(): bool;

    public function isNotEmpty(): bool;

    public function remove(int|string|Wishable $id): void;
}
