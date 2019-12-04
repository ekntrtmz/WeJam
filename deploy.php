<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/npm.php';

// Project name
set('application', 'WEJAM');

// Project repository
set('repository', 'git@github.com:ekntrtmz/WeJam.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);


// Hosts
host('wejam.in')
    ->user('ekn')
    ->set('deploy_path', '/var/www/wejam.in');

// Tasks
task('artisan:optimize', function () {});

task('build', function () {
    run('cd {{release_path}} && build');
});

// Install npm
after('deploy:update_code', 'npm:install');
after('deploy:update_code', 'npm:run production');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
