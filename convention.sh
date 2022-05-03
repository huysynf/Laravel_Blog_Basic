echo "-------------------Conventions test----------------------"

echo "Testing PSR-2"
./vendor/bin/phpcs --standard=PSR2 --sniffs=Generic.PHP.LowerCaseConstant tests
./vendor/bin/phpcs --standard=PSR2 app/Traits
./vendor/bin/phpcs --standard=PSR2 app/Models
./vendor/bin/phpcs --standard=PSR2 app/Services
./vendor/bin/phpcs --standard=PSR2 app/Repositories
./vendor/bin/phpcs --standard=PSR2 app/Http/Controllers
