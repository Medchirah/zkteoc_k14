<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Device;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Toggle;
use App\Filament\Widgets\StatsOverview;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\DeviceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DeviceResource\Pages\EditDevice;
use App\Filament\Resources\DeviceResource\RelationManagers;
use App\Filament\Resources\DeviceResource\Pages\ListDevices;
use App\Filament\Resources\DeviceResource\Pages\CreateDevice;
use App\Filament\Resources\DeviceResource\Widgets\deviceStatsOverview;

class DeviceResource extends Resource
{
    protected static ?string $model = Device::class;

    protected static ?string $navigationIcon = 'heroicon-o-device-tablet';
    protected static ?string $navigationGroup = 'Devices/Timerecords management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([Card::make()->columns(2)->schema([ Forms\Components\TextInput::make('nomDevice')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('adress_ip')
                    ->required()
                    ->maxLength(255),
                   
                Forms\Components\Toggle::make('connect')
                    ->required()
                    ->onColor('success')
                    ->offColor('danger'),
                     Forms\Components\TextInput::make('port')
                    ->required()
                    ->maxLength(255),])
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomDevice')
                ->searchable(),
                Tables\Columns\TextColumn::make('adress_ip')
                ->searchable(),
                Tables\Columns\TextColumn::make('port')
                ->searchable()
                ->sortable(),
                Tables\Columns\IconColumn::make('connect')
                    ->searchable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Filter::make('is_connected')
                ->query(fn (Builder $query): Builder => $query->where('connect', true)),
                Filter::make('is_disconnected')
                ->query(fn (Builder $query): Builder => $query->where('connect', false))
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
            
    }
    public static function getWidgets():array{
        return[
            deviceStatsOverview::class,
        ];
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
            'index' => Pages\ListDevices::route('/'),
            'create' => Pages\CreateDevice::route('/create'),
            'edit' => Pages\EditDevice::route('/{record}/edit'),
        ];
    }    
}
