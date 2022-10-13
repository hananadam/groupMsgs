<?php

namespace Wloop\GroupMessages\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;

class Contact extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Wloop\GroupMessages\Models\Contact::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name','phone'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Select::make(__('has_whatsapp'), 'has_whatsapp')->options([
                '0' => 'لا يوجد',
                '1' => ' يوجد ', 
            ])->displayUsingLabels(),
            Text::make(__('name'), 'name')->sortable()
            ->rules('required', 'max:255')->required(),

            Number::make(__('phone'), 'phone') ->sortable()
            ->rules('required', 'max:10')->required(),

            Text::make(__('Email'), 'email')->nullable(),
            Text::make(__('City'), 'city')->nullable(),
            Text::make(__('Country'), 'country')->nullable(),
            Text::make(__('variable1'), 'variable1')->nullable(),
            Text::make(__('variable2'), 'variable2')->nullable(),
            Text::make(__('variable3'), 'variable3')->nullable(),
            Text::make(__('variable4'), 'variable4')->nullable(),
            Text::make(__('variable5'), 'variable5')->nullable(),
            Text::make(__('notes'), 'notes')->nullable(),
            Select::make(__('Status'), 'status')->options([
                '0' => 'غير متاح',
                '1' => 'متاح ', 
            ])->displayUsingLabels(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function singularLabel()
    {
        return __('Contact');
    }

    public static function label()
    {
        return ــ('Contacts');
    }


}
