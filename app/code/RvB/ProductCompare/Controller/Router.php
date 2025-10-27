<?php

declare(strict_types=1);

namespace RvB\ProductCompare\Controller;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;

class Router implements \Magento\Framework\App\RouterInterface
{
    /**
     * Match a route to this router.
     * 
     * @param RequestInterface $request
     * @return ActionInterface|null
     */
    public function match(RequestInterface $request): ?ActionInterface
    {
        dd($request->getPathInfo());
    }
}
