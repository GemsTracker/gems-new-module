<?php

declare(strict_types=1);

/**
 * @package    Module
 * @subpackage
 * @author     Matijs de Jong <mjong@magnafacta.nl>
 */

namespace Module;

/**
 * @package    Module
 * @subpackage
 * @since      Class available since version 1.0
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
//            'auth'            => $this->getAuthSettings(),
//            'console'         => $this->getConsoleSettings(),
//            'dependencies'    => $this->getDependencies(),
//            'migrations'      => $this->getMigrations(),
//            'overLoaderPaths' => ['Module'],
//            'routes'          => $this->getRoutes(),
//            'templates'       => $this->getTemplates(),
//            'translations'    => $this->getTranslationSettings(),
        ];
    }

    protected function getAuthSettings(): array
    {
        return [
            'allowLoginOnOtherOrganization' => true,
        ];
    }

    public function getConsoleSettings(): array
    {
        return [
            'resetPassword' => true,
        ];
    }

    protected function getMigrations(): array
    {
        return [
            'tables' => [
                dirname(__DIR__) . '/configs/db/tables',
            ],
            /*'seeds' => [
                dirname(__DIR__) . '/configs/db/seeds',
            ],* /
            'patches' => [
                dirname(__DIR__) . '/Config/Db/patches',
            ], // */
        ];
    }

    /**
     * Returns the templates configuration
     *
     * @return mixed[]
     */
    public function getTemplates(): array
    {
        return [
            'paths' => [
                'part'  => [dirname(__DIR__) . '/templates/part'],
            ],
        ];
    }

}