<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\device;
use App\Models\Employe;
use App\Models\departement;
use Filament\Resources\Form;
use Widgets\employeOverview;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use App\Filament\Widgets\StatsOverview;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EmployeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\EmployeResource\RelationManagers;
use App\Filament\Resources\EmployeResource\Widgets\employeStatsOverview;

class EmployeResource extends Resource
{
    protected static ?string $model = Employe::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $navigationGroup = ' Employes/Departement management';
    protected static ?string $recordTitleAttribute = 'nom';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')
                ->required()
                ->maxLength(255),
                Select::make('device_id')
                ->relationship('device', 'nomDevice')
                ->options(device::all()->pluck('nomDevice', 'id'))
                ->searchable(),
                Select::make('departement_id')
                ->relationship('departement', 'nomDept')
                ->options(departement::all()->pluck('nomDept', 'id'))
                ->searchable(),
                FileUpload::make('photo')->preserveFilenames(),
                Radio::make('gender')
                 ->options([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    
                ]),
               TextInput::make('empriente')
                    ->required()
                    ->maxLength(255),
                    DatePicker::make('date_travail')
                    ->required()
                    ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('id')
                ->sortable(),
                
                TextColumn::make('nom')->sortable(),
                TextColumn::make('device.nomDevice')->sortable(),
                TextColumn::make('departement.nomDept')->sortable(),
                ImageColumn::make('photo'),
                TextColumn::make('gender') ,
                TextColumn::make('empriente'),
                TextColumn::make('date_travail')
                    ->sortable()
                    ->date(),
                TextColumn::make('created_at')
                    ->dateTime(),
                
            ])
            ->filters([
                SelectFilter::make('tous les departements')->relationship('departement', 'nomDept')
                ->label('tous les departements')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    public static function getWidgets():array{
        return[
            employeStatsOverview::class,
        ];

    }
    
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEmployes::route('/'),
        ];
    }    
 
}
