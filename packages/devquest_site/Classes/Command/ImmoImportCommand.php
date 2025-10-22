<?php

namespace Mbx\DevquestSite\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use TYPO3\CMS\Core\Http\NormalizedParams;
use TYPO3\CMS\Core\Http\ServerRequestFactory;



class ImmoImportCommand extends Command
{
    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $output;


    /**
     * @param string|null $name
     */
    public function __construct(string $name = null)
    {
        parent::__construct($name);
        $this->initializeRequest();
    }


    protected function configure()
    {
        $this->setDescription('Import immo data');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output) : int
    {
        $this->input = $input;
        $this->output = $output;

        $this->output = new SymfonyStyle($input, $output);
        $this->output->title($this->getDescription());

        $this->output->writeln('ImmoImportCommand execute');

        return 0;
    }


    protected function initializeRequest(): void
    {
        $_SERVER['HTTP_HOST'] = 'localhost';
        $_SERVER['REQUEST_URI'] = '/';

        $request = ServerRequestFactory::fromGlobals();
        $normalizedParams = NormalizedParams::createFromRequest($request);

        $request = $request
            ->withAttribute('normalizedParams', $normalizedParams)
            ->withAttribute('applicationType', 2); //2 => CLI Context

        $GLOBALS['TYPO3_REQUEST'] = $request;
    }
}
