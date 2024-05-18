<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a repository';

    /**
     * Execute the console command.
     */
    public function handle()
    {
                
        $name = $this->argument('name');
        $directory = app_path("/Repository/$name.php");
        if(file_exists($directory)){
            $this->error('this Repository already exists');
            return true;
        }

        $interfaceName='I' . $name;
        $interfaceDirectory= app_path("/Repository/Interface/$interfaceName.php");

        $content = <<<PHP
        <?php
        namespace App\Repository;
        use App\Repository\Interface\\$interfaceName;
        class $name implements $interfaceName
        {
 
        }
        PHP;

        $interfacecontent = <<<PHP
        <?php
        namespace App\Repository\Interface;
        interface $interfaceName
        {
 
        }
        PHP;
 
        file_put_contents($directory, $content);
        file_put_contents($interfaceDirectory, $interfacecontent);
        $this->info('new Repository is created');
            
         
}}
