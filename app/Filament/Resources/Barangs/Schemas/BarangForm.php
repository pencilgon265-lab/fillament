<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('gambar')->directory('barangs')->image()->imagePreviewHeight('150')->required(false),
                TextInput::make('nama_barang')
                    ->required(),
                TextInput::make('kode_barang')
                    ->required(),
                TextInput::make('harga_barang')
                    ->required(),
            ]);
    }
}
