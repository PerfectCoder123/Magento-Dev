<?php

namespace Practice\Core\Console\Command;

use Practice\Core\Model\HelloService;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

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
        $this->setName('vendor:hello')
            ->setDescription('Greets the given name with optional greeting')
            ->addArgument(
                'name',
                InputArgument::REQUIRED,
                'Name of the person to greet'
            )
            ->addOption(
                'greeting',
                null,
                InputOption::VALUE_OPTIONAL,
                'Custom greeting word (e.g., Hi, Hello, Hey)',
                'Hello'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $greeting = $input->getOption('greeting');

        $message = $this->helloService->composeGreeting($greeting, $name);
        $output->writeln("<info>$message</info>");

        return Cli::RETURN_SUCCESS;
    }
}
