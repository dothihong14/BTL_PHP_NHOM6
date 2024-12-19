<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Models\Room;
use App\Models\RoomFacility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Table;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Quản lý phòng';
    protected static ?string $navigationLabel = 'Quản lý phòng';
    protected static ?string $title = 'Quản lý phòng';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2) // Grid layout 2 cột
                    ->schema([
                        Forms\Components\Select::make('hotel_id')
                        ->label('Khách sạn')
                        ->relationship('hotel', 'name') // Tạo quan hệ với model Hotel
                        ->required()
                        ->placeholder('Chọn khách sạn'),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label('Tên phòng'),

                        Forms\Components\Select::make('type')
                            ->options([
                                'standard' => 'Tiêu chuẩn',
                                'deluxe' => 'Deluxe',
                                'suite' => 'Suite',
                            ])
                            ->required()
                            ->label('Loại phòng'),

                        Forms\Components\TextInput::make('price')
                            ->numeric()
                            ->required()
                            ->label('Giá (VND)'),

                        Forms\Components\TextInput::make('capacity')
                            ->numeric()
                            ->required()
                            ->label('Số người tối đa'),

                        Forms\Components\RichEditor::make('description')
                            ->nullable()
                            ->label('Mô tả'),
                        
                        Forms\Components\FileUpload::make('image')
                            ->label('Ảnh phòng')
                            ->directory('rooms/images')
                            ->image()
                            ->maxSize(1024), // Giới hạn 1MB
                        
                            Forms\Components\Select::make('facilities')
                            ->multiple()
                            ->options(RoomFacility::all()->pluck('name', 'id')) // Lấy các tiện ích từ model RoomFacility
                            ->label('Tiện ích'),
                        
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hotel.name')->label('Tên khách sạn'), // Thêm cột tên khách sạn

                Tables\Columns\TextColumn::make('name')->label('Tên phòng'),
                Tables\Columns\TextColumn::make('type')->label('Loại phòng'),
                Tables\Columns\TextColumn::make('price')->label('Giá (VND)')->money('VND'),
                Tables\Columns\TextColumn::make('capacity')->label('Sức chứa'),
                Tables\Columns\ImageColumn::make('image')->label('Ảnh phòng'), // Cột hiển thị ảnh
                Tables\Columns\TextColumn::make('capacity')->label('Số người tối đa'),
              
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
