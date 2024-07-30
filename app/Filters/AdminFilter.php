<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    { // Check if the current URL is 'admin0503/login'
        $currentURL = $request->uri->getPath();
        // print_r($currentURL);die();
        if (!session()->get('admin_username') && ($currentURL !== '/admin0503/login' && $currentURL !== '/admin0503/lupapassword' && $currentURL !== '/admin0503/resetpassword')) {
            return redirect()->to('admin0503/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
