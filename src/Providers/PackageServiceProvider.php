<?php

namespace Thinmoto\Ui\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Thinmoto\Ui\Components\Checkbox;
use Thinmoto\Ui\Components\Datepicker;
use Thinmoto\Ui\Components\Group;
use Thinmoto\Ui\Components\Input;
use Thinmoto\Ui\Components\InputGroup;
use Thinmoto\Ui\Components\Loader;
use Thinmoto\Ui\Components\Radio;
use Thinmoto\Ui\Components\Select;
use Thinmoto\Ui\Components\StyleSelect;
use Thinmoto\Ui\Components\Textarea;
use Thinmoto\Ui\Components\Timepicker;
use Thinmoto\Ui\Livewire\Modal;
use Thinmoto\Ui\Livewire\SideView;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
	    $this->loadViewsFrom(__DIR__.'/../../resources/views', 'ui');

	    Blade::component('ui::loader', Loader::class);
	    Blade::component('ui::group', Group::class);
	    Blade::component('ui::input', Input::class);
	    Blade::component('ui::textarea', Textarea::class);
	    Blade::component('ui::input-group', InputGroup::class);
	    Blade::component('ui::checkbox', Checkbox::class);
	    Blade::component('ui::radio', Radio::class);
	    Blade::component('ui::select', Select::class);
	    Blade::component('ui::datepicker', Datepicker::class);
	    Blade::component('ui::timepicker', Timepicker::class);
	    Blade::component('ui::style-select', StyleSelect::class);

	    Livewire::component('ui::modal', Modal::class);
	    Livewire::component('ui::side-view', SideView::class);
    }

    public function register()
    {
//        $this->app->singleton(Package::class, function(){
//            return new Package();
//        });
    }
}
