<?php
declare(strict_types=1);

namespace Mbx\DevquestSite\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\JsonResponse;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Mbx\DevquestSite\Domain\Repository\ImmoRepository;

final class ImmoController extends ActionController
{
    private ImmoRepository $immoRepository;

    #[Required]
    public function injectImmoRepository(ImmoRepository $immoRepository): void
    {
        $this->immoRepository = $immoRepository;
    }

    public function listAction(): ResponseInterface
    {
        return new JsonResponse(['data' => ["dummy"]]);
    }
}