<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\SelectColumn;
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
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                ->required()
                ->maxLength(255),
                Select::make('nomDept')
                ->relationship('departement', 'nomDept')
                ->options(departement::all()->pluck('nomDept', 'id'))
                ->searchable()
                
                ,
                FileUpload::make('photo'),
                Radio::make('gender')
                 ->options([
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    
                ]),
                Forms\Components\TextInput::make('empriente')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\DatePicker::make('date_travail')
                    ->required()
                    ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->sortable(),
                
                Tables\Columns\TextColumn::make('nom')->sortable(),
                TextColumn::make('nomDept')->sortable(),
                ImageColumn::make('photo'),
                Tables\Columns\TextColumn::make('gender') ,
                    Tables\Columns\TextColumn::make('empriente'),
                    Tables\Columns\TextColumn::make('date_travail')
                    ->sortable()
                    ->date(),
                    Tables\Columns\TextColumn::make('created_at')
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
