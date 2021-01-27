<?php

namespace App\Providers;

use Carbon\Carbon;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

      Carbon::setLocale('pt_BR');

//      $this->app->register(RepositoryServiceProvider::class);

      $this->app->singleton(Generator::class, function () {
        return Factory::create('pt_BR');
      });

//      $this->loadViewsFrom(base_path('resources/views/admin'), '\App\Http\Controllers\Admin');
//      $this->loadViewsFrom(base_path('resources/views/backoffice'), '\App\Http\Controllers\BackOffice');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Blade::directive('date', function ($expression) {
        return "<?php echo ($expression)->format('d/m/Y'); ?>";
      });

      Blade::directive('datetime', function ($expression) {
        return "<?php echo ($expression)->format('d/m/Y H:i'); ?>";
      });

      Blade::directive('currency', function ($expression) {
        return "<?php echo money($expression, 'BRL'); ?>";
      });

//      View::composer('*', function (\Illuminate\View\View $view) {
//        if (!in_array($view->getName(), [
//            'backoffice.auth.register',
//        ])) {
//          $view->with('user', Auth::user());
//        }
//      });
    }
}
