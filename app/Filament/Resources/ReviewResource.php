<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\Review;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';
    protected static ?string $navigationGroup = 'Quản lý đánh giá';
    protected static ?string $navigationLabel = 'Đánh giá của khách hàng';
    protected static ?string $title = 'Đánh giá';
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required()
                ->label('Người Đánh Giá'), // Tiêu đề tiếng Việt
            Forms\Components\Select::make('reviewable_type')
                ->options([
                    'App\Models\Hotel' => 'Khách Sạn',
                    'App\Models\Room' => 'Phòng',
                ])
                ->required()
                ->label('Loại Đánh Giá'), // Tiêu đề tiếng Việt
            Forms\Components\TextInput::make('reviewable_id')
                ->required()
                ->label('ID Đối Tượng Đánh Giá'), // Tiêu đề tiếng Việt
            Forms\Components\TextInput::make('rating')
                ->required()
                ->label('Đánh Giá (1-5)') // Tiêu đề tiếng Việt
                ->numeric()
                ->minValue(1)
                ->maxValue(5),
            Forms\Components\Textarea::make('comment')
                ->nullable()
                ->label('Nhận Xét'), // Tiêu đề tiếng Việt
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('user.name')->label('Người Đánh Giá'),
            Tables\Columns\TextColumn::make('reviewable_type')->label('Loại Đánh Giá'),
            Tables\Columns\TextColumn::make('reviewable_id')->label('ID Đối Tượng'),
            Tables\Columns\TextColumn::make('rating')->label('Đánh Giá'),
            Tables\Columns\TextColumn::make('comment')->label('Nhận Xét'),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make()->label('Chỉnh Sửa'), // Tiêu đề tiếng Việt
            Tables\Actions\DeleteAction::make()->label('Xóa'), // Tiêu đề tiếng Việt
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}
