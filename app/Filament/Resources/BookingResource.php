<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Quản lý đơn đặt phòng';
    protected static ?string $navigationGroup = 'Đặt phòng';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('Họ')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->label('Tên')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('street')
                    ->label('Địa chỉ'),
                Forms\Components\TextInput::make('city')
                    ->label('Thành phố'),
                Forms\Components\TextInput::make('zip_code')
                    ->label('Mã bưu điện'),
                Forms\Components\TextInput::make('country')
                    ->label('Quốc gia'),
                Forms\Components\TextArea::make('message')
                    ->label('Ghi chú'),
                Forms\Components\TextInput::make('total_price')
                    ->label('Tổng giá')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->label('Trạng thái')
                    ->options([
                        'paid' => 'Đã thanh toán',
                        'confirmed' => 'Đã xác nhận',
                        'cancelled' => 'Đã hủy',
                        'pending' => 'Chưa thanh toán',
                    ])
                    ->required(),
                Forms\Components\Select::make('payment_method')
                    ->label('Phương thức thanh toán')
                    ->options([
                        'on_arrival' => 'Thanh toán khi nhận hàng',
                        'vnpay' => 'VNPAY',
                    ])
                    ->required(),
                Forms\Components\BelongsToSelect::make('hotel_id')
                    ->label('Khách sạn')
                    ->relationship('hotel', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            // Các cột hiển thị trong bảng
            Tables\Columns\TextColumn::make('id')
                ->label('Mã đơn hàng'),
            Tables\Columns\TextColumn::make('first_name')
                ->label('Họ'),
            Tables\Columns\TextColumn::make('last_name')
                ->label('Tên'),
            Tables\Columns\TextColumn::make('total_price')
                ->label('Tổng giá')->money('VND')
               ,
               Tables\Columns\TextColumn::make('status')
               ->label('Trạng thái')
               ->getStateUsing(fn ($record) => match ($record->status) {
                   'paid' => 'Đã thanh toán',
                   'confirmed' => 'Đã xác nhận',
                   'cancelled' => 'Đã hủy',
                   'pending' => 'Chưa thanh toán',
                   default => 'Không xác định',
               }),
               Tables\Columns\TextColumn::make('payment_method')
                ->label('Phương thức thanh toán')
                ->getStateUsing(fn ($record) => match ($record->payment_method) {
                    'on_arrival' => 'Thanh toán khi nhận hàng',
                    'vnpay' => 'VNPAY',
                    default => 'Không xác định',
                }),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Ngày đặt')
                ->date(),
            Tables\Columns\TextColumn::make('hotel.name')
                ->label('Khách sạn'),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
