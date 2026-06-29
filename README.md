# GemsTracker Module Template
Template for new gemstracker modules libraries, quick setup with src dir and test dir.

Modules contain code shared by multiple projects. Use the [Gems New Project](https://github.com/GemsTracker/gems-new-project) template to create a new project.

See [About GensTRacker](https://github.com/GemsTracker/gemstracker-library/blob/master/README.md) for more information on
GemsTracker in general.

## Usage

To use a module some of these actions may be needed at the project level:

1. Add the module to `composer.json`
1. Add the `ConfigProvider.php` in `/config/modules.php`
2. Add `@import '../../vendor/org/project/resources/css/module.scss` to `resource/css/gems.scss`
3. If database migration path are overridden, specify them in `ConfigProvider.php->getMigrations()` function and enable the function in the `__invoke()` function.
4. If templates are overridden, specify them in `ConfigProvider.php->getTemplates()` function and enable the function in the `__invoke()` function.