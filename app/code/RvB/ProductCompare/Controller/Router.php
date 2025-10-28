<?php

declare(strict_types=1);

namespace RvB\ProductCompare\Controller;

use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;

class Router implements \Magento\Framework\App\RouterInterface
{
    private readonly ActionFactory $actionFactory;

    /**
     * @param ActionFactory $actionFactory
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * Match a route to this router.
     * 
     * @param RequestInterface $request
     * @return ActionInterface|null
     */
    public function match(RequestInterface $request): ?ActionInterface
    {
        $path = trim($request->getPathInfo(), '/');
        $pathParts = explode('/', $path);
        
        if($pathParts[0] === 'compare') {
            $skus = array_slice($pathParts, 1);

            $request->setModuleName('compare')->setControllerName('index')->setActionName('index')->setParam('skus', $skus);
            return $this->actionFactory->create(Forward::class);
        }

        return null;
    }
}
