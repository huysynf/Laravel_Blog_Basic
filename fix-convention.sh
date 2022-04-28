echo "Conventions Fixed"

echo "Fixed PSR-2"
phpcbf --standard=PSR2 --sniffs=Generic.PHP.LowerCaseConstant tests
phpcbf --standard=PSR2 app/Traits
phpcbf --standard=PSR2 app/Models
phpcbf --standard=PSR2 app/Services
phpcbf --standard=PSR2 app/Repositories
phpcbf --standard=PSR2 app/Http/Controllers
g
