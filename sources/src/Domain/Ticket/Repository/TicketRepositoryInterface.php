<?php

namespace App\Domain\Ticket\Repository;

use App\Application\Ticket\Dto\TicketSummaryCollectionDto;
use App\Application\Ticket\ReadModel\TicketSummaryView;
use App\Domain\Ticket\Entity\Ticket;
use App\Domain\Ticket\ValueObject\Counter\TicketChannelsCount;
use App\Domain\Ticket\ValueObject\Counter\TicketPrioritiesCount;
use App\Domain\Ticket\ValueObject\Counter\TicketStatusesCount;
use App\Domain\Ticket\ValueObject\TicketStatus;
use Symfony\Component\Uid\Uuid;

interface TicketRepositoryInterface
{
    public function countPerStatus(): TicketStatusesCount;

    public function countPerPriority(): TicketPrioritiesCount;

    public function countPerChannel(): TicketChannelsCount;

    public function findOneById(Uuid $id): ?Ticket;

    public function save(Ticket $ticket): void;

    public function delete(Ticket $ticket): void;

    public function findByStatus(TicketStatus $status): TicketSummaryCollectionDto;

    public function getSummary(Uuid $ticketId): ?TicketSummaryView;
}
