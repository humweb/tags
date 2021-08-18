<?php

namespace Humweb\Tags;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TagsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('tags')
            ->hasConfigFile()
            ->hasMigration('create_tag_tables');
    }
}
