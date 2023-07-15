<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produit;
use App\Models\Categorie;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProduitResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProduitResource\RelationManagers;

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
                Forms\Components\TextInput::make('nom_prod')->required()->label(__('Nom du Produit')),
               
                Textarea::make('descri_prod')
                    ->rows(10)
                    ->cols(20)
                    ->minLength(50)
                    ->maxLength(500)
                    ->label(__('description du Produit')),
                Forms\Components\TextInput::make('prix_prod')->required()->label(__('Prix du produit')),
                // Forms\Components\TextInput::make('categorie_id')->required()->relationship('Categorie', 'id'),
                Select::make('categorie_id')
                    ->options(function () {
                        return Categorie::all()->pluck('nom_cat', 'id');
                    }),
                Forms\Components\TextInput::make('qteS_prod')->required()->label(__('quantite en en stock')),
                Forms\Components\TextInput::make('code_prod')->required(),

                FileUpload::make('url_prod')
                //->acceptedFileTypes($types = ['png','jpeg','jpg']) // Limit the type of files that can be uploaded using an array of mime types.
                ->image()
                ->disk('public')
                ->directory('ProduitImage')
                ->visibility('public')
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
                Tables\Filters\Filter::make('nom_prod')
                ->query(fn (Builder $query): Builder => $query->where('nom_prod', true))
                ->label('nom')
                ->toggle(),
                Tables\Filters\Filter::make('prix_prod')
                ->query(fn (Builder $query): Builder => $query->whereNotNull('prix_prod'))
                ->label('prix')
                ->toggle(),
                Tables\Filters\Filter::make('qteS_prod')
                ->query(fn (Builder $query): Builder => $query->where('qteS_prod', true))
                ->label('quantite en stock')
                ->toggle(),
                Tables\Filters\Filter::make('categorie_id')
                ->query(fn (Builder $query): Builder => $query->where('categorie_id', true))
                ->label('categorie')
                ->toggle(),
                
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
