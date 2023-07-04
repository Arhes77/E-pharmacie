<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProduitResource\Pages;
use App\Filament\Resources\ProduitResource\RelationManagers;
use App\Models\Produit;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProduitResource extends Resource
{
    protected static ?string $model = Produit::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('nom_prod')->required(),
                Forms\Components\TextInput::make('descri_prod')->required(),
                Forms\Components\TextInput::make('prix_prod')->required(),
                Forms\Components\TextInput::make('categorie_id')->required(),
                Forms\Components\TextInput::make('qteS_prod')->required(),
                Forms\Components\TextInput::make('code_prod')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nom_prod'),
            Tables\Columns\TextColumn::make('descri_prod'),
            Tables\Columns\TextColumn::make('prix_prod'),
            Tables\Columns\TextColumn::make('categorie_id'),
            Tables\Columns\TextColumn::make('qteS_prod'),
            ])
            ->filters([
                //
                Tables\Filters\Filter::make('nom_prod'),
                Tables\Filters\Filter::make('prix_prod')
                ->query(fn (Builder $query): Builder => $query->whereNotNull('prix_prod')),
                Tables\Filters\Filter::make('qteS_prod'),
                Tables\Filters\Filter::make('categorie_id'),
                
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
            'index' => Pages\ListProduits::route('/'),
            'create' => Pages\CreateProduit::route('/create'),
            'edit' => Pages\EditProduit::route('/{record}/edit'),
        ];
    } 
    
    public static function getGloballySearchableAttributes(): array
    {
        return ['id', 'nom_prod', 'descri_prod', 'qteS_prod'];
    }
}
