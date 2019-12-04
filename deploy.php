<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'WEJAM');

// Project repository
set('repository', 'git@github.com:ekntrtmz/WeJam.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Default Stage
set('default_stage', 'dev');

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);


// Hosts
host('wejam.in')
    ->stage('dev')
    ->user('ekn')
    ->set('deploy_path', '/var/www/wejam.in');

// Tasks
task('npm:production', function () {
    if (has('previous_release')) {
        run('cp -R {{previous_release}}/node_modules {{release_path}}/node_modules');
    }

    run('cd {{release_path}} && npm install && npm run production');
});

task('artisan:optimize', function () {});

task('build', function () {
    run('cd {{release_path}} && build');
});

// Install npm
//after('deploy:update_code', 'npm:production');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

