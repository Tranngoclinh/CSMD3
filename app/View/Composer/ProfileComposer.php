<?php
 
namespace App\View\Composer;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\UserRepository
     */
    protected $admin_name;
 
    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\UserRepository  $users
     * @return void
     */
    public function __construct()
    {
        $this->admin_name = Auth::admins();
       
     
    }
 
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('admin_name', $this->admin_name);
    }
}