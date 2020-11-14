<?php

namespace Joshua060198\NovaSimpleStatusWithEnum;

use SimpleSquid\Nova\Fields\Enum\Enum;

class StatusForm extends Enum
{
    /**
     * Create a new field.
     * How to use?
     *     => StatusForm::make()
     *     => StatusForm::make('Status')
     *     => StatusForm::make('Status', 'status')
     *
     * @param  string  $name
     * @param  string|callable|null  $attribute
     * @param  callable|null  $resolveCallback
     * @return void
     */
    public function __construct($class, $name = null, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct(is_null($name) ? 'Status' : $name, is_null($attribute) ? 'status' : $attribute, $resolveCallback);

        $this->attachEnum($class)->onlyOnForms()->required()->default(($class::getValues())[0]);
    }
}
