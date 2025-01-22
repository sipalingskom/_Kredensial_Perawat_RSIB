<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekredensialingResource\Pages;
use App\Filament\Resources\RekredensialingResource\RelationManagers;
use App\Models\Rekredensialing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RekredensialingResource extends Resource
{
    protected static ?string $model = Rekredensialing::class;

    protected static ?string $navigationIcon = 'heroicon-m-clipboard-document-list';

    protected static ?string $navigationLabel = 'Formulir Usulan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->maxLength(16),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\Textarea::make('alamat')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('istalasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('str')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('ijzah')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('institusi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tgl_lulus')
                    ->required(),
                Forms\Components\TextInput::make('pendidikan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('status_rekredensial')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('istalasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('str')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ijzah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institusi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_lulus')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pendidikan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListRekredensialings::route('/'),
            'create' => Pages\CreateRekredensialing::route('/create'),
            'edit' => Pages\EditRekredensialing::route('/{record}/edit'),
        ];
    }
}
