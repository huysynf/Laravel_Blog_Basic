echo "Conventions Fixed"

echo "Fixed PSR-2"
./vendor/bin/phpcbf --standard=PSR2 --sniffs=Generic.PHP.LowerCaseConstant tests
./vendor/bin/phpcbf --standard=PSR2 app/Traits
./vendor/bin/phpcbf --standard=PSR2 app/Models
./vendor/bin/phpcbf --standard=PSR2 app/Services
./vendor/bin/phpcbf --standard=PSR2 app/Repositories
./vendor/bin/phpcbf --standard=PSR2 app/Http/Controllers

