<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string|\UnitEnum|null $navigationGroup = 'System Settings';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.pages.settings';

    public ?array $data = [];

    public function mount(): void
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        $this->form->fill($settings);
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Section::make('Contact & Social Information')
                    ->schema([
                        TextInput::make('phone')
                            ->label('Phone Number')
                            ->default('+234 903 766 6399')

                            ->required(),
                        TextInput::make('whatsapp_url')
                            ->label('WhatsApp Link')
                            ->default('https://wa.me/2349037666399')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email Address')
                            ->default('asutextgnigltd@gmail.com')
                            ->email()
                            ->required(),
                        TextInput::make('address_lagos')
                            ->label('Lagos Office Address')
                            ->default('2nd Ave, 216 Close, Movamo Court, Banana Island · 20 Marina, Lagos Island')
                            ->required(),
                        TextInput::make('address_calabar')
                            ->label('Cross-River Office Address')
                            ->default('10 Federal Housing Road, Calabar, Cross-River State')
                            ->required(),
                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->default('https://www.facebook.com/asutext'),
                        TextInput::make('youtube_url')
                            ->label('YouTube URL')
                            ->default('https://www.youtube.com/@asutext'),
                        TextInput::make('twitter_url')
                            ->label('Twitter/X URL')
                            ->default('https://twitter.com/asutext'),
                    ])->columns(2),

                Section::make('Global SEO Settings')
                    ->schema([
                        TextInput::make('seo_title')
                            ->label('Global SEO Title')
                            ->default('Asutext Group Nigeria Limited | Cleaning, Laundry, Fumigation & More in Lagos')
                            ->required(),
                        Textarea::make('seo_description')
                            ->label('Global SEO Description')
                            ->default('Asutext Group Nigeria Limited, professional cleaning, fumigation, laundry, transport, catering, branding, fashion design and mobile accessories across Lagos Island, Banana Island, and Cross-River State.')
                            ->required(),
                        TextInput::make('seo_keywords')
                            ->label('Global SEO Keywords')
                            ->default('cleaning services Lagos, fumigation Lagos, laundry Lagos, pest control Lagos, cleaning company Nigeria')
                            ->required(),
                    ])->columns(1),

                Section::make('Hero Slider Images')
                    ->description('Upload custom images for the home page Ken Burns hero slider. Default stock images will be used if left empty.')
                    ->schema([
                        FileUpload::make('hero_slide_1')
                            ->label('Hero Slide 1 (Cleaning Services)')
                            ->image()
                            ->directory('hero')
                            ->visibility('public'),
                        FileUpload::make('hero_slide_2')
                            ->label('Hero Slide 2 (Branding Services)')
                            ->image()
                            ->directory('hero')
                            ->visibility('public'),
                        FileUpload::make('hero_slide_3')
                            ->label('Hero Slide 3 (Catering Services)')
                            ->image()
                            ->directory('hero')
                            ->visibility('public'),
                    ])->columns(3),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $state = $this->form->getState();

        foreach ($state as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        Notification::make()
            ->title('Settings saved successfully.')
            ->success()
            ->send();
    }
}
