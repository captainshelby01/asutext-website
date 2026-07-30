<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('Asutext Group')
            ->colors([
                'primary' => [
                    50 => '254, 242, 242',
                    100 => '254, 226, 226',
                    200 => '254, 202, 202',
                    300 => '252, 165, 165',
                    400 => '248, 113, 113',
                    500 => '204, 0, 0', // Brand Red: #CC0000
                    600 => '178, 0, 0',
                    700 => '153, 0, 0',
                    800 => '127, 0, 0',
                    900 => '102, 0, 0',
                    950 => '76, 0, 0',
                ],
            ])
            ->renderHook(
                'panels::head.end',
                fn (): string => '
                    <style>
                        /* Signature Brand Top Accent Line */
                        body::before {
                            content: "";
                            position: fixed;
                            top: 0;
                            left: 0;
                            right: 0;
                            height: 5px;
                            background: linear-gradient(90deg, #CC0000 0%, #003580 100%);
                            z-index: 99999;
                            pointer-events: none;
                        }
                        /* Custom Scrollbar for premium feel */
                        ::-webkit-scrollbar {
                            width: 8px;
                            height: 8px;
                        }
                        ::-webkit-scrollbar-track {
                            background: #f1f1f1;
                        }
                        ::-webkit-scrollbar-thumb {
                            background: #CC0000;
                            border-radius: 4px;
                        }
                        ::-webkit-scrollbar-thumb:hover {
                            background: #a80000;
                        }
                    </style>
                ',
            )
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->navigationGroups([
                'Content',
                'Leads & Feedback',
                'System Settings',
            ])
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
