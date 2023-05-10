<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Timerecord;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TimerecordResource\Pages;
use App\Filament\Resources\TimerecordResource\RelationManagers;

class TimerecordResource extends Resource
{
    protected static ?string $model = Timerecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-finger-print';
    protected static ?string $navigationGroup = 'Devices/Timerecords management';
    protected static ?string $recordTitleAttribute = 'title';


    public static function form(Form $form): Form
    {
        ColorPicker::make('#00ff00');
        return $form
        
    
            ->schema([
                Card::make()
                ->extraAttributes(['class' => 'bg-gray-50'])
                ->schema([
    
                     Forms\Components\TextInput::make('employe_id')
                    ->required()
            ,
                Forms\Components\DateTimePicker::make('time_in')
                    ->required(),
                Forms\Components\DateTimePicker::make('time_out')
                    ->required(),
                Forms\Components\TextInput::make('durration')
                    ->required(),
       
                    ])
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('employe_id'),
                Tables\Columns\TextColumn::make('time_in')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('time_out')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('durration'),
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
            'index' => Pages\ListTimerecords::route('/'),
            'create' => Pages\CreateTimerecord::route('/create'),
            'edit' => Pages\EditTimerecord::route('/{record}/edit'),
        ];
    }    
}
