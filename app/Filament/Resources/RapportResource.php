<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\employe;
use App\Models\Rapport;
use App\Models\departement;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\RapportResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RapportResource\RelationManagers;
use App\Filament\Resources\RapportResource\Pages\EditRapport;
use App\Filament\Resources\RapportResource\Pages\ListRapports;
use App\Filament\Resources\RapportResource\Pages\CreateRapport;

class RapportResource extends Resource
{
    protected static ?string $model = Rapport::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Reporting';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tittle'),
                TextInput::make('description'),
                TextInput::make('request'),
                TextInput::make('condition'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        

            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('tittle'),
                Tables\Columns\TextColumn::make('description'),
                TextColumn::make('departement.nomDept'),    
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                
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
            'index' => Pages\ListRapports::route('/'),
            'create' => Pages\CreateRapport::route('/create'),
            'edit' => Pages\EditRapport::route('/{record}/edit'),
        ];
    }    
}
