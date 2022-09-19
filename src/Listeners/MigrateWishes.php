<?php declare(strict_types=1);

namespace Dive\Wishlist\Listeners;

use Dive\Wishlist\Actions\MigrateWishesAction;
use Dive\Wishlist\WishlistManager;
use Illuminate\Http\Request;

class MigrateWishes
{
    public function __construct(
        private readonly Request $request,
        private readonly WishlistManager $wishlist,
    ) {}

    public function handle()
    {
        if ($this->request->hasCookie($this->wishlist->config('cookie.name'))) {
            app(MigrateWishesAction::class)->execute();
        }
    }
}
