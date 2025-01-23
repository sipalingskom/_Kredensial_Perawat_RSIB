<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersyaratanResource\Pages;
use App\Filament\Resources\PersyaratanResource\RelationManagers;
use App\Models\Persyaratan;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersyaratanResource extends Resource
{
    protected static ?string $model = Persyaratan::class;

    protected static ?string $navigationIcon = 'heroicon-m-list-bullet';

    protected static ?string $navigationLabel = 'Prasyarat';

    protected static ?string $modelLabel = 'Prasyarat';

    protected static ?int $navigationSort = -1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->schema([
                        Forms\Components\Textarea::make('pertanyaan')
                            ->required()
                            ->columnSpanFull(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pertanyaan')
                    ->searchable()
                    ->limit(70)
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M d, Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('M d, Y')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersyaratans::route('/'),
            'create' => Pages\CreatePersyaratan::route('/create'),
            'edit' => Pages\EditPersyaratan::route('/{record}/edit'),
        ];
    }
}
