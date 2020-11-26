<?php

namespace Joshua060198\NovaSimpleStatusWithEnum;

trait MappableStatus {

    public static function getMappedStatus() {
        return static::$defaultMappedStatus;
    }

    public static $defaultMappedStatus = [
        'Active' => 'bg-success-light text-success-dark',
        'Warning' => 'bg-warning-light text-warning-dark',
        'Not Active' => 'bg-danger-light text-danger-dark',
        'Approved' => 'bg-success-light text-success-dark',
        'Waiting Approval' => 'bg-warning-light text-warning-dark',
        'Not Approved' => 'bg-danger-light text-danger-dark',
        'Delivered' => 'bg-success-light text-success-dark',
        'Delivering' => 'bg-warning-light text-warning-dark',
        'Not Delivered' => 'bg-danger-light text-danger-dark',
        'Paid' => 'bg-success-light text-success-dark',
        'Not Paid' => 'bg-danger-light text-danger-dark',
    ];
}