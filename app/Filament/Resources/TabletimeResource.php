<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TabletimeResource\Pages;
use App\Filament\Resources\TabletimeResource\RelationManagers;
use App\Models\Tabletime;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TabletimeResource extends Resource
{
    protected static ?string $model = Tabletime::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'shifttime management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('shifttime_id')
                    ->required(),
                Forms\Components\TextInput::make('employe_id')
                    ->required(),
                Forms\Components\TextInput::make('employe_nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('shifttime_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_debut')
                    ->required(),
                Forms\Components\DatePicker::make('date_fin')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('shifttime_id'),
                Tables\Columns\TextColumn::make('employe_id'),
                Tables\Columns\TextColumn::make('employe_nom'),
                Tables\Columns\TextColumn::make('shifttime_name'),
                Tables\Columns\TextColumn::make('date_debut')
                    ->date(),
                Tables\Columns\TextColumn::make('date_fin')
                    ->date(),
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTabletimes::route('/'),
        ];
    }    
}
