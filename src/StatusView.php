<?php

namespace Joshua060198\NovaSimpleStatusWithEnum;

use Laravel\Nova\Fields\Badge;

class StatusView extends Badge
{
    /**
     * Create a new field.
     * How to use?
     *     => StatusView::make(intval((string) $this->status))
     *
     * @param  int  $status - the field value according to StatusType class.
     * @param  string   $name - the field text (default: 'Status').
     * @param  array    $types - custom mapping for style and text.
     * @return void
     */
    public function __construct($status, $class, $name = null)
    {
        $this->status = $class::getKey(intval((string) $status));

        parent::__construct(!is_null($name) ? $name : 'Status', function () {
            $result = preg_replace("([A-Z])", " $0", $this->status);
            $result = trim($result);

            return $result;
        });

        if (method_exists($class, 'getMappedStatus')) {
            $this->types = $class::getMappedStatus();
        }

        $this->exceptOnForms();
    }
}
