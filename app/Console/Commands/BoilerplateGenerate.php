<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Console\BoilerplateInputParser;
use App\Console\BoilerplateGenerator;
use Illuminate\Filesystem\Filesystem;

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

    protected $file;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(BoilerplateInputParser $parser, BoilerplateGenerator $generator, Filesystem $file)
    {
        parent::__construct();

        $this->parser    = $parser;
        $this->generator = $generator;
        $this->file      = $file;
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

        if($this->file->isDirectory($input->base))
        {
            $this->file->makeDirectory($input->base.'/Repo');
            $this->file->makeDirectory($input->base.'/Entities');
        }

        // Create a file with the correct boilerplate
        $this->generator->make(
            $input,
            app_path('Console/Commands/templates/eloquent.template'),
            $this->getClassPath($input,'Eloquent')
        );

        $this->generator->make(
            $input,
            app_path('Console/Commands/templates/interface.template'),
            $this->getClassPath($input,'Interface')
        );

        $this->generator->make(
            $input,
            app_path('Console/Commands/templates/model.template'),
            $input->base.'/Entities/'.$input->class.'.php'
        );

        $this->info("All done!");
    }

    private function getClassPath($input,$type)
    {
        return sprintf("%s/%s%s.php", $input->base.'/Repo', $input->class, $type);
    }
}
