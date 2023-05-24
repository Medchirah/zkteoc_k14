<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\device;
use App\Models\employe;
use App\Models\Timerecord;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TimerecordResource\Pages;
use App\Filament\Resources\TimerecordResource\RelationManagers;

class TimerecordResource extends Resource
{
    protected static ?string $model = Timerecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-finger-print';
    protected static ?string $navigationGroup = 'Devices/Timerecords management';
    


    public static function form(Form $form): Form
    {
        ColorPicker::make('#00ff00');
        return $form
        
    
            ->schema([
                 Card::make()
                ->extraAttributes(['class' => 'bg-gray-50'])
                ->schema([
            Select::make('employe_id')
                ->relationship('employe', 'nom')
                ->options(employe::all()->pluck('nom', 'id'))
                ->searchable(),
            Select::make('device_id')
                ->relationship('device', 'nomDevice')
                ->options(device::all()->pluck('nomDevice', 'id'))
                ->searchable(),    
            TimePicker::make('time_in')
                    ->required(),
            TimePicker::make('time_out')
                    ->required(),
            TextInput::make('durration')
                    ->required(),
       
                    ])
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('employe.nom'),
                Tables\Columns\TextColumn::make('device.nomDevice'),
                Tables\Columns\TextColumn::make('time_in')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('time_out')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('durration'),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListTimerecords::route('/'),
            'create' => Pages\CreateTimerecord::route('/create'),
            'edit' => Pages\EditTimerecord::route('/{record}/edit'),
        ];
    }    
}
