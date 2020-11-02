<?php

namespace SuharTyo\Dot1AlgorithmicTest;

use Symfony\Component\Dotenv\Dotenv;

class ResolveConfig {

    private $env;

    public function __construct(string $envPath) {
        $this->env = $this->readEnvFile($envPath);
    }

    public function resolve(string $yamlPath):? object
    {
        # code...
    }

    protected function readEnvFile(string $envPath)
    {
        $this->env = (new Dotenv())->loadEnv($envPath);
    }

}