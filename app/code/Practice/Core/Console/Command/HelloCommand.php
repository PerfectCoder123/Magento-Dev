<?php

namespace Practice\Core\Console\Command;

use Practice\Core\Model\HelloService;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
    private HelloService $helloService;

    public function __construct(HelloService $helloService)
    {
        parent::__construct();
        $this->helloService = $helloService;
    }

    protected function configure()
    {
        $this->setName('custom:hello')
             ->setDescription('Says hello from a service class');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $message = $this->helloService->getGreeting();
        $output->writeln("<info>$message</info>");
        return Cli::RETURN_SUCCESS;
    }
}
