<?php
declare(strict_types=1);

namespace Ttree\Eel\NodeSearchService;

use Neos\ContentRepository\Domain\Service\Context;
use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Neos\Domain\Service\NodeSearchServiceInterface;

class NodeSearchServiceHelper implements ProtectedContextAwareInterface
{
    /**
     * @var NodeSearchServiceInterface
     * @Flow\Inject
     */
    protected $searchService;

    public function findByProperties(string $term, array $searchNodeTypes, Context $context)
    {
        return $this->searchService->findByProperties($term, $searchNodeTypes, $context);
    }

    public function findByProperty(string $property, string $term, array $searchNodeTypes, Context $context)
    {
        return $this->searchService->findByProperties([$property => $term], $searchNodeTypes, $context);
    }

    /**
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
