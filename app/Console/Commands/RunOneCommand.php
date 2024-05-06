<?php

namespace App\Console\Commands;

use App\Models\CategoryModel;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class RunOneCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run_one {func}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $func = $this->argument('func');

        switch ($func) {
            case 'userAdminDefault':
                $this->userAdminDefault();
                echo "Run $func successfully\n";
                break;
            case 'categoryDefault':
                $this->categoriesDefault();
                echo "Run $func successfully\n";
                break;
            default:
                echo "Function not found\n";
        }
    }

    public function userAdminDefault()
    {
        $userAdmin = config('core.admin');

        User::firstOrCreate([
            'email' => $userAdmin['email'],
        ], [
            'name' => $userAdmin['name'],
            'password' => Hash::make($userAdmin['password']),
        ]);
    }

    public function categoriesDefault()
    {
        $categories = config('category.list_categories', []);
        CategoryModel::query()->delete();
        foreach ($categories as $name => $category) {
            CategoryModel::create([
                'name_en' => $category['en'],
                'name_vi' => $category['vi'],
                'key' => $name
            ]);
        }
    }
}
