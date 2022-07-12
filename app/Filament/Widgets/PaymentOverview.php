<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class PaymentOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Our current users', User::query()->count()),
            Card::make('Subscription orders', Payment::query()->count())
                ->description('3k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Card::make('Processed payments', Payment::where('paid',1)->count())
                ->color('success')
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'wire:click' => '$emitUp("setStatusFilter", "processed")',
                ]),
        ];
    }
}
