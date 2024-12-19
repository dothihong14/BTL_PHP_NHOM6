<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LocationResource\Pages;
use App\Filament\Resources\LocationResource\RelationManagers;
use App\Models\Location;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;
    protected static ?string $navigationGroup = 'Quản lý chung'; // Nhóm điều hướng
    protected static ?string $navigationIcon = 'heroicon-o-map'; // Biểu tượng vị trí
    protected static ?string $navigationLabel = 'Vị Trí'; // Tiêu đề tiếng Việt

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông Tin Vị Trí') // Tiêu đề section
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(255)
                            ->afterStateUpdated(function ($state, callable $set) {
                                $slug = \Illuminate\Support\Str::slug($state);
                                $set('slug', $slug);
                            })
                            ->label('Tên Vị Trí'), // Tiêu đề tiếng Việt
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->dehydrated()
                          
                            ->unique(Location::class, 'slug', ignoreRecord: true)
                            
                            
                            ->maxLength(255)
                            ->label('Slug'), // Tiêu đề tiếng Việt
                            Forms\Components\FileUpload::make('image'),
                            Forms\Components\Select::make('country_id')
                                ->label('Country')
                                ->preload()
                                ->relationship('country', 'name')
                                ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Tên Vị Trí'), // Tiêu đề tiếng Việt
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->label('Slug'), // Tiêu đề tiếng Việt
                    Tables\Columns\ImageColumn::make('image'),
                    Tables\Columns\TextColumn::make('country.name')->label('Country'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Ngày Tạo'), // Tiêu đề tiếng Việt
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Ngày Cập Nhật'), // Tiêu đề tiếng Việt
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make()
                        ->label('Chỉnh sửa'), // Tiêu đề tiếng Việt
                    Tables\Actions\ViewAction::make()
                        ->label('Xem'), // Tiêu đề tiếng Việt
                    Tables\Actions\DeleteAction::make()
                        ->label('Xóa'), // Tiêu đề tiếng Việt
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Xóa'), // Tiêu đề tiếng Việt
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLocations::route('/'),
            'create' => Pages\CreateLocation::route('/create'),
            'edit' => Pages\EditLocation::route('/{record}/edit'),
        ];
    }
}
