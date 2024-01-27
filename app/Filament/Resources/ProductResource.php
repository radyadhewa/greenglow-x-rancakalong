<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Support\RawJs;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-s-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->schema([
                    Section::make('Keterangan Produk')
                        -> icon('heroicon-s-shopping-bag')
                        -> description('Pastikan informasi produk yang akan diupload sudah lengkap dan detail')
                        -> collapsible()
                        -> schema([
                            TextInput::make('nama')
                                ->required()
                                ->live(onBlur: true)
                                ->afterStateUpdated(function (string $operation, string $state, Forms\Set $set ) {
                                    $set('slug', Str::slug($state));
                                }),

                            TextInput::make('slug')
                                ->label('Slug (automatic filled)')
                                ->required(),

                            TextInput::make('harga')
                                ->mask(RawJs::make('$money($input)'))
                                ->stripCharacters(',')
                                ->minValue(0)
                                ->numeric()
                                ->required(),

                            TextInput::make('stok')
                                ->required()
                                ->numeric()
                                ->minValue(0),

                            Select::make('kategori')
                                ->label('kategori')
                                ->options([
                                    'manisan' => 'Manisan',
                                    'asinan' => 'Asinan',
                                ])
                                ->native('false')
                                ->required(),

                            TagsInput::make('tags')
                                ->required(),
                        ]),

                    MarkdownEditor::make('deskripsi')
                        ->columnSpanFull(),

                    TextInput::make('linktoko')
                        ->required(),

                    TextInput::make('linkshop')
                        ->required(),

                    FileUpload::make('gambar')
                        ->required()
                        ->disk('public')
                        ->directory('foto')
                        ->columnSpanFull(),

                    Toggle::make('statusPosting')
                        ->onColor('success')
                        ->offColor('danger'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                -> sortable()
                -> searchable()
                -> toggleable(isToggledHiddenByDefault:true),
                ImageColumn::make('gambar')
                -> toggleable(),
                TextColumn::make('nama')
                -> sortable()
                -> searchable()
                -> toggleable(),
                TextColumn::make('slug')
                -> sortable()
                -> searchable()
                -> toggleable(),
                TextColumn::make('harga')
                -> sortable()
                -> toggleable()
                -> toggleable()
                -> money('IDR'),
                TextColumn::make('stok')
                -> sortable()
                -> toggleable()
                -> toggleable(),
                TextColumn::make('kategori')
                -> badge()
                -> color( function (string $state): string{
                    if ($state == 'manisan') return 'success';
                    return 'info';
                })
                -> sortable()
                -> searchable()
                -> toggleable(),
                TextColumn::make('tags')
                -> badge()
                -> sortable()
                -> searchable()
                -> toggleable(),
                TextColumn::make('deskripsi'),
                TextColumn::make('linktoko'),
                TextColumn::make('linkshop'),
                CheckboxColumn::make('statusPosting'),
                TextColumn::make('created_at')
                -> label('tanggal dibuat')
                -> date()
                -> toggleable()
                -> sortable()
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
