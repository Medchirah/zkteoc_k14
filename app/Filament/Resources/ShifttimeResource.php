<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Shifttime;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\BadgeColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ShifttimeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ShifttimeResource\RelationManagers;

class ShifttimeResource extends Resource
{
    protected static ?string $model = Shifttime::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'shifttime management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TimePicker::make('date_entre')
                    ->required(),
                Forms\Components\TimePicker::make('date_sortie')
                    ->required(),
                Forms\Components\TimePicker::make('p_entre')
                    ->required(),
                Forms\Components\TimePicker::make('p_sortie')
                    ->required(),
                Forms\Components\TimePicker::make('debut_entre')
                    ->required(),
                Forms\Components\TimePicker::make('fin_entre')
                    ->required(),
                Forms\Components\TimePicker::make('debut_sortie')
                    ->required(),
                Forms\Components\TimePicker::make('fin_sortie')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
               BadgeColumn::make('name')
                 ->colors([
                         'primary',
                         'secondary' => 'draft',
                         'warning' => 'reviewing',
                         'success' => 'published',
                         'danger' => 'rejected',
    ]),
                Tables\Columns\TextColumn::make('date_entre'),
                Tables\Columns\TextColumn::make('date_sortie'),
                Tables\Columns\TextColumn::make('p_entre'),
                Tables\Columns\TextColumn::make('p_sortie'),
                Tables\Columns\TextColumn::make('debut_entre'),
                Tables\Columns\TextColumn::make('fin_entre'),
                Tables\Columns\TextColumn::make('debut_sortie'),
                Tables\Columns\TextColumn::make('fin_sortie'),
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
            'index' => Pages\ManageShifttimes::route('/'),
        ];
    }    
}
