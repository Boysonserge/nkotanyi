<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Savannabits\Flatpickr\Flatpickr;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('eventTitle')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('eventSummary')
                        ->maxLength(255),
                    Forms\Components\RichEditor::make('eventDescription')
                        ->columnSpan(2)
                        ->maxLength(16777215),
                    Forms\Components\FileUpload::make('eventImage')
                        ->columnSpan(2)
                        ->maxFiles(1)
                        ->maxSize(1024),
                    Forms\Components\TextInput::make('eventLocation')
                        ->maxLength(255),
                    Flatpickr::make('eventDate')
                        ->dateFormat('Y-m-d')
                        ->enableTime(true),

                    Forms\Components\TextInput::make('eventFee')
                        ->maxLength(255),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('eventTitle'),
                Tables\Columns\TextColumn::make('eventSummary'),
                Tables\Columns\TextColumn::make('eventDescription'),
                Tables\Columns\ImageColumn::make('eventImage')->rounded(),
                Tables\Columns\TextColumn::make('eventLocation'),
                Tables\Columns\TextColumn::make('eventDate'),
                Tables\Columns\TextColumn::make('eventTime'),
                Tables\Columns\TextColumn::make('eventFee'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
