<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomFacilityResource\Pages;
use App\Filament\Resources\RoomFacilityResource\RelationManagers;
use App\Models\RoomFacility;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomFacilityResource extends Resource
{
    protected static ?string $model = RoomFacility::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Quản lý tiện ích phòng';
    protected static ?string $navigationLabel = 'Tiện ích phòng';
    protected static ?string $title = 'Tiện ích phòng';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->label('Tên tiện ích'), // Tiêu đề trường
            Forms\Components\FileUpload::make('image')
                ->required() // Nếu cần thiết, có thể thay đổi thành ->nullable()
                ->label('Hình ảnh') // Tiêu đề cho trường hình ảnh
                ->image() // Chỉ chấp nhận hình ảnh
                ->disk('public') // Disk sử dụng để lưu trữ
                ->directory('room_facilities'), // Thư mục lưu hình ảnh
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Tên tiện ích'),
            Tables\Columns\ImageColumn::make('image')->label('Hình ảnh'), // Hiển thị hình ảnh
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
            'index' => Pages\ListRoomFacilities::route('/'),
            'create' => Pages\CreateRoomFacility::route('/create'),
            'edit' => Pages\EditRoomFacility::route('/{record}/edit'),
        ];
    }
}
