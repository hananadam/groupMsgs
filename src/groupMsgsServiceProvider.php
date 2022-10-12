<?php

namespace Adam\groupMsgs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Adam\groupMsgs\Commands\groupMsgsCommand;

class groupMsgsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('groupMsgs')
            ->hasConfigFile()
            ->hasMigrations([
                "2022_10_12_124247_create_group_contacts_table",
                "2022_10_12_124248_create_contacts_table",
            ])
            ->runsMigrations()
            ->hasCommand(groupMsgsCommand::class);
    }
    
}

