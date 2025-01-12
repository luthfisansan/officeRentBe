<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OfficeSpaceBenePhotoResource\Pages;
use App\Filament\Resources\OfficeSpaceBenePhotoResource\RelationManagers;
use App\Models\OfficeSpaceBenePhoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OfficeSpaceBenePhotoResource extends Resource
{
    protected static ?string $model = OfficeSpaceBenePhoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListOfficeSpaceBenePhotos::route('/'),
            'create' => Pages\CreateOfficeSpaceBenePhoto::route('/create'),
            'edit' => Pages\EditOfficeSpaceBenePhoto::route('/{record}/edit'),
        ];
    }
}
