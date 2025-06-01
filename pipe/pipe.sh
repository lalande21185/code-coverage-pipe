composer install

echo '-- Run tests and generate coverage report --'
XDEBUG_MODE=coverage php vendor/bin/phpunit --coverage-php coverage.php --coverage-filter src tests

echo '-- Process coverage report and send figure to bitbucket app --'
php /pipe/register-test-coverage.php --branch=$BITBUCKET_BRANCH --url=$APP_URL