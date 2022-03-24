<?php

namespace Lucacalcaterra\FilamentLdapPlugin\Commands;

use Illuminate\Console\Command;

class FilamentLdapPluginCommand extends Command
{
    public $signature = 'filament-ldap-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
