<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DomainResource\Pages;
use App\Filament\Resources\DomainResource\RelationManagers;
use App\Models\Domain;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DomainResource extends Resource
{
    protected static ?string $model = Domain::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('domain_name')
                ->required()
                ->label('Domain Name'),
            Forms\Components\Textarea::make('description')
                ->required()
                ->label('Description'),
            Forms\Components\TextInput::make('original_price')
                ->numeric()
                ->required()
                ->label('Original Price'),
            Forms\Components\TextInput::make('discounted_price')
                ->numeric()
                ->label('Discounted Price'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
            Tables\Columns\TextColumn::make('domain_name')->label('Domain Name'),
            Tables\Columns\TextColumn::make('description')->label('Description')->limit(50),
            Tables\Columns\TextColumn::make('original_price')->label('Original Price'),
            Tables\Columns\TextColumn::make('discounted_price')->label('Discounted Price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDomains::route('/'),
            'create' => Pages\CreateDomain::route('/create'),
            'edit' => Pages\EditDomain::route('/{record}/edit'),
        ];
    }
}
