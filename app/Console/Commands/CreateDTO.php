<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHPUnit\Event\Runtime\PHP;

class CreateDTO extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:dto {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'creating a DTO File';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $name = $this->argument('name');
       $directory = app_path("/DTO/$name.php");
       if(file_exists($directory)){
        $this->error('this DTO alreadyexsits');
        return True;

       }
       $content = <<<PHP
       <?php
       namespace App\DTO;
       Class $name {


        public function __constructor()
        {

        }
       }


       ?>
       PHP;

       file_put_contents($directory, $content);
       $this->info('new DTO is created');

       
    }
}
