<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RatingResource\Pages;
use App\Filament\Resources\RatingResource\RelationManagers;
use App\Models\Rating;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RatingResource extends Resource
{
    protected static ?string $model = Rating::class;


    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $label = 'Đánh Giá';

    protected static ?string $pluralLabel = 'Danh Sách Đánh Giá';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Select::make('user_id')
            ->label('Người Dùng') // Tiêu đề tiếng Việt
            ->options(\App\Models\User::all()->pluck('name', 'id')) // Lấy danh sách người dùng: id làm key, name làm value
            ->required()
            ->searchable(), // Cho phép tìm kiếm trong danh sách
        
        Select::make('hotel_id')
            ->label('Khách Sạn') // Tiêu đề tiếng Việt
            ->options(\App\Models\Hotel::all()->pluck('name', 'id')) // Lấy danh sách khách sạn: id làm key, name làm value
            ->required()
            ->searchable(), // Cho phép tìm kiếm trong danh sách
        

            TextInput::make('comfort_score')
                ->label('Điểm Sự Thoải Mái')
                ->required()
                ->numeric()
                ->step(0.1),

            TextInput::make('facilities_score')
                ->label('Điểm Tiện Nghi')
                ->required()
                ->numeric()
                ->step(0.1),

            TextInput::make('staff_score')
                ->label('Điểm Nhân Viên')
                ->required()
                ->numeric()
                ->step(0.1),

            TextInput::make('food_score')
                ->label('Điểm Thức Ăn')
                ->required()
                ->numeric()
                ->step(0.1),

            TextInput::make('value_score')
                ->label('Điểm Tỷ Lệ Giá Cả - Chất Lượng')
                ->required()
                ->numeric()
                ->step(0.1),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')
                ->label('ID')
                ->sortable(),

            TextColumn::make('user_id')
                ->label('ID Người Dùng')
                ->sortable(),

            TextColumn::make('hotel_id')
                ->label('ID Khách Sạn')
                ->sortable(),

            TextColumn::make('comfort_score')
                ->label('Điểm Sự Thoải Mái')
                ->sortable(),

            TextColumn::make('facilities_score')
                ->label('Điểm Tiện Nghi')
                ->sortable(),

            TextColumn::make('staff_score')
                ->label('Điểm Nhân Viên')
                ->sortable(),

            TextColumn::make('food_score')
                ->label('Điểm Thức Ăn')
                ->sortable(),

            TextColumn::make('value_score')
                ->label('Điểm Tỷ Lệ Giá Cả - Chất Lượng')
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Ngày Tạo')
                ->dateTime(),

            TextColumn::make('updated_at')
                ->label('Ngày Cập Nhật')
                ->dateTime(),
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
            'index' => Pages\ListRatings::route('/'),
            'create' => Pages\CreateRating::route('/create'),
            'edit' => Pages\EditRating::route('/{record}/edit'),
        ];
    }
}
