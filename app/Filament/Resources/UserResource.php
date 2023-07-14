<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

     


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                Forms\Components\TextInput::make('nom')->required(),
                Forms\Components\Select::make('sexe')
              
                ->options([
                    'masculin' => 'masculin',
                    'feminin' => 'feminin',
                ])->required(),
                Forms\Components\TextInput::make('prenom')->required(),
                Forms\Components\TextInput::make('qualification')->required(),
                TextInput::make('telephone')
                ->tel() // Require a valid telephone number to be provided.
                ->placeholder($placeholder='6 71 15 77 15'), // Set the placeholder for when the field is empty. It supports localization strings.
                
                Forms\Components\TextInput::make('email')->email()->required(),
                DatePicker::make('birthdate')->minDate(now()->subYears(80))
                ->maxDate(now()),

                Forms\Components\TextInput::make('adresse')->required(),

                TextInput::make('password')
                ->autocomplete($autocomplete = 'on') // Set up autocomplete for the field.
                ->autofocus() // Autofocus the field.
                ->disableAutocomplete() // Disable autocomplete for the field.
                
                ->password() ,// Obfuscate the field's value.


                FileUpload::make('profile')
                // ->acceptedFileTypes($types = ['png','jpeg','jpg']) // Limit the type of files that can be uploaded using an array of mime types.
                ->disk('public')
                ->directory('UserProfile')
                ->visibility('public')
                
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nom'),
            Tables\Columns\TextColumn::make('email'),
            Tables\Columns\TextColumn::make('adresse'),
            Tables\Columns\TextColumn::make('qualification'),
            Tables\Columns\TextColumn::make('birthdate'),
            // Set the visibility of uploaded files.
                
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
