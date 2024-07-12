# Simple blog build with Laravel/Livewire
Installation guide:\
    * `composer install`\
    * `npm install`\
    * `npm run build`\
    * `php artisan migrate`\
    * `php artisan db:seed`\
    * `php artisan serve`\
\
Installation Guid (with Docker)\
    * `composer install`\
    * `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`\
    * `sail up`\
    * `sail artisan migrate`\
    * `sail artisan db:seed`\
    * In container terminal run - `curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash`\
    * Then `npm run build`\
    * App should run at `http://localhost/:80`\

Requisites:\
    * PHP 8.2 or higher\
    * MySQL\
    * Composer: https://getcomposer.org/download/\
    * Docker
