<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;

class address_count extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:address_count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find out, how many addresses a customer has';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $id = $this->argument('id');
        $this->info('Customer #' . $id . ' has ' . Customer::query()->findOrFail($id)->addressu->count() . ' addresses.');
    }
}


