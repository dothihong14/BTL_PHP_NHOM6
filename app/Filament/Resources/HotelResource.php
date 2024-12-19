<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HotelResource\Pages;
use App\Filament\Resources\HotelResource\RelationManagers;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HotelResource extends Resource
{
    protected static ?string $model = Hotel::class;
    protected static ?string $navigationGroup = 'Quản Lý Khách Sạn'; // Nhóm điều hướng

    protected static ?string $navigationIcon = 'heroicon-o-home'; // Biểu tượng khách sạn
    protected static ?string $navigationLabel = 'Khách Sạn'; // Tiêu đề tiếng Việt
    protected static ?string $slug = 'khach-san'; // Slug tiếng Việt
    protected static ?string $group = 'Quản Lý'; // Tên nhóm

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Thông Tin Khách Sạn') // Tiêu đề section
            ->schema([
                Forms\Components\Grid::make(2) // Thiết lập lưới với 2 cột
                    ->schema([
                        // Cột 1: Trường upload ảnh
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->multiple()
                            ->required()
                            ->label('Ảnh') // Tiêu đề tiếng Việt
                            ->columnSpan(1), // Chiếm 1 cột
        
                        // Cột 2: Các trường còn lại
                        Forms\Components\Grid::make(1) // Tạo lưới con với 1 cột
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Tên') // Tiêu đề tiếng Việt
                                    ->columnSpan(1), // Chiếm 1 cột
        
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->label('Slug') // Tiêu đề tiếng Việt
                                    ->columnSpan(1), // Chiếm 1 cột
        
                                    Forms\Components\Textarea::make('description') // Thêm trường mô tả
                                    ->required()
                                    ->label('Mô Tả') // Tiêu đề tiếng Việt
                                    ->columnSpan(1) // Chiếm 1 cột
                                    ->extraAttributes(['style' => 'min-height: 500px;']) // Đặt chiều cao tối thiểu
                                
                            ])->columnSpan(1),
                    ]),
                ]),
        
        
            Forms\Components\Section::make('Thông Tin Vị Trí')
                ->schema([
                    Forms\Components\TextInput::make('location')
                        ->required()
                        ->maxLength(255)
                        ->label('Vị Trí') // Tiêu đề tiếng Việt
                        ->columnSpan(1), // Chiếm 1 cột
        
                    Forms\Components\Select::make('location_id') // Sử dụng Select thay vì TextInput
                        ->required()
                        ->label('ID Vị Trí')
                        ->options(\App\Models\Location::all()->pluck('name', 'id')) // Lấy danh sách vị trí
                        ->searchable()
                        ->columnSpan(1), // Chiếm 1 cột
                ])
                ->columnSpan(2),
        
            Forms\Components\Section::make('Thông Tin Giá')
                ->schema([
                    Forms\Components\Grid::make(2) // Thiết lập lưới với 2 cột
                    ->schema([

                        Forms\Components\TextInput::make('star_rating')
                        ->required()
                        ->numeric()
                        ->label('Số Sao') // Tiêu đề tiếng Việt
                        ->columnSpan(1), // Chiếm 1 cột
        
                    Forms\Components\TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('$')
                        ->label('Giá Tiền') // Tiêu đề tiếng Việt
                        ->columnSpan(1), // Chiếm 1 cột
        
                    Forms\Components\TextInput::make('price_per_night') // Thêm trường giá mỗi đêm
                        ->required()
                        ->numeric()
                        ->label('Giá mỗi đêm') // Tiêu đề tiếng Việt
                        ->columnSpan(1), // Chiếm 1 cột
        
                    Forms\Components\Select::make('status') // Thêm trường trạng thái
                        ->required()
                        ->options([
                            'special_price' => 'Giá Đặc Biệt',
                            'best_seller' => 'Bán Chạy Nhất',
                            'regular' => 'Bình Thường',
                            'new_arrival' => 'Hàng Mới Về',
                            'limited_offer' => 'Khuyến Mãi Có Hạn',
                            'recommended' => 'Được Khuyến Nghị',
                            'last_room' => 'Phòng Cuối',
                            'discounted' => 'Giảm Giá',
                        ])
                        ->label('Trạng Thái') // Tiêu đề tiếng Việt
                        ->columnSpan(1), // Chiếm 1 cột



                     ]),
                ]),
        ]);
        
        
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('image')->label('Ảnh'),
               // Lấy ảnh đầu tiên
            Tables\Columns\TextColumn::make('name')->searchable()->label('Tên'),
            Tables\Columns\TextColumn::make('slug')->searchable()->label('Slug'),
            Tables\Columns\TextColumn::make('location')->searchable()->label('Vị Trí'),
            Tables\Columns\TextColumn::make('star_rating')->numeric()->sortable()->label('Số Sao'),
            Tables\Columns\TextColumn::make('location.name')->label('Khu Vực')->sortable(),
            Tables\Columns\TextColumn::make('price')->money('VND')->sortable()->label('Giá Tiền'),
            Tables\Columns\TextColumn::make('price_per_night')->money('VND')->sortable()->label('Giá mỗi đêm'), // Thêm cột giá mỗi đêm
            Tables\Columns\TextColumn::make('status')->label('Trạng Thái'), // Thêm cột trạng thái
            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->toggleable()->label('Ngày Tạo'),
            Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable()->toggleable()->label('Ngày Cập Nhật'),
        ])
        ->filters([
            // ...
        ])
        ->actions([
            Tables\Actions\ActionGroup::make([
                Tables\Actions\EditAction::make()->label('Chỉnh sửa'),
                Tables\Actions\ViewAction::make()->label('Xem'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
                Tables\Actions\Action::make('clone') // Thêm nút Clone
                    ->label('Clone')
                    ->action(function ($record) {
                        // Logic để nhân bản khách sạn
                        $clonedHotel = $record->replicate(); // Nhân bản bản ghi
                        
                        // Tạo slug mới cho bản sao
                        $clonedHotel->slug = self::generateUniqueSlug($clonedHotel->name); // Gọi phương thức static
                        
                        $clonedHotel->save(); // Lưu bản sao mới
                    })
                    ->icon('heroicon-o-document-duplicate') // Thêm biểu tượng nếu cần
            ]),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make()->label('Xóa'),
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
            'index' => Pages\ListHotels::route('/'),
            'create' => Pages\CreateHotel::route('/create'),
            'edit' => Pages\EditHotel::route('/{record}/edit'),
        ];
    }
    public static function generateUniqueSlug($name)
    {
        // Chuyển đổi tên thành slug
        $slug = \Str::slug($name);
        $originalSlug = $slug;
        $i = 1;

        // Kiểm tra xem slug đã tồn tại chưa
        while (\DB::table('hotels')->where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $i; // Thêm số để tạo slug duy nhất
            $i++;
        }

        return $slug;
    }
}