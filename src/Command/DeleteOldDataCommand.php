<?php

namespace App\Command;

use App\Entity\Data;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(
    name: 'delete:old-data'
)]
class DeleteOldDataCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Deletes data older than 30 days from the database');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //.env_example дополнить строкой APP_TIMEZONE=Europe/Moscow
        date_default_timezone_set($_ENV['APP_TIMEZONE']);
        $date = new \DateTime();
        $date->modify('-30 days');

        $dataRepository = $this->entityManager->getRepository(Data::class);
        $oldData = $dataRepository->createQueryBuilder('d')
            ->where('d.measurementsDate < :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();

        if (count($oldData) === 0) {
            $output->writeln('No old data found.' . (new \DateTime())->format('Y-m-d H:i:s'));
            return 0;
        }

        foreach ($oldData as $data) {
            $this->entityManager->remove($data);
        }

        $this->entityManager->flush();

        $output->writeln(sprintf('%d old data deleted.', count($oldData)) . (new \DateTime())->format('Y-m-d H:i:s'));

        return 0;
    }
}

