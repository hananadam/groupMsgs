<?php

namespace Wloop\GroupMessages;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wloop\GroupMessages\Commands\GroupMessagesCommand;

class GroupMessagesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('GroupMessages')
            ->hasConfigFile()
            ->hasMigrations([
                '2022_10_12_124247_create_group_contacts_table',
                '2022_10_12_124248_create_contacts_table',
            ])
            ->runsMigrations()
            ->hasCommand(GroupMessagesCommand::class);
    }
}
