<?php
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Contact;

class NavbarComposer
{
    public function compose(View $view)
    {
        $unreadCount = Contact::where('is_viewed', false)->count();
        $view->with('unreadCount', $unreadCount);
    }
}
