<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\BoilerplateInputParser;
use App\Console\BoilerplateGenerator;

class BoilerplateGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'boilerplate:generate  {name} {--properties=} {--base=App}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Boilerplate command';

    protected $parser;

    protected $generator;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(BoilerplateInputParser $parser, BoilerplateGenerator $generator)
    {
        parent::__construct();

        $this->parser = $parser;
        $this->generator = $generator;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Parse input from Artisan into usable form
        $input = $this->parser->parse(
            $this->argument('name'),
            $this->option('base'),
            $this->option('properties')
        );

        // Create a file with the correct boilerplate
        $this->generator->make(
            $input,
            app_path('Console/Commands/templates/boilerplate.template'),
            $this->getClassPath($input)
        );

        $this->info("All done!");
    }

    private function getClassPath($input)
    {
        return sprintf("%s/%sEloquent.php", $this->option('base').'/'.$this->argument('name').'/Repo', $input->class);
    }
}
