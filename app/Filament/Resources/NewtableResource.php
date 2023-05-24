<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Newtable;
use App\Models\departement;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NewtableResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewtableResource\RelationManagers;

class NewtableResource extends Resource
{
    protected static ?string $model = Newtable::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom_employe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nom_departement')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date debut de thavaille')
                    ->required(),
                Forms\Components\TextInput::make('device')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('shifttime')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('check-In')
                    ->required(),
                Forms\Components\TextInput::make('check-out')
                    ->required(),
                Forms\Components\TextInput::make('duration')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date jour')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom_employe')->searchable(),
                Tables\Columns\TextColumn::make('nom_departement')->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('date debut de thavaille')
                    ->date(),
                Tables\Columns\TextColumn::make('device')->searchable(),
                Tables\Columns\TextColumn::make('shifttime'),
                Tables\Columns\TextColumn::make('check-In'),
                Tables\Columns\TextColumn::make('check-out'),
                Tables\Columns\TextColumn::make('duration'),
                Tables\Columns\TextColumn::make('date jour')
                    ->date(),
            ])
            ->filters([
               
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
               // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNewtables::route('/'),
            //'create' => Pages\CreateNewtable::route('/create'),
            //'edit' => Pages\EditNewtable::route('/{record}/edit'),
        ];
    }    
}
