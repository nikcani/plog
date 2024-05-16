<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

if (! function_exists('dump_any_val_to_string')) {
    function dump_any_val_to_string(mixed $val = null): string
    {
        $type = gettype($val);
        switch ($type) {
            case 'NULL':
            case 'boolean':
                return var_export($val, true);
            case 'object':
                if (is_a($val, Model::class) || is_a($val, Collection::class)) {
                    $string = get_class($val).'|';

                    if (is_a($val, Collection::class)) {
                        $string .= $val->count().'|';
                    }

                    $string .= var_export($val->toArray(), true);

                    return $string;
                }
                // intentional fall-through if not a specific object
            default:
                if ($type === 'object') {
                    $type .= '|'.get_class($val);
                }

                if (is_array($val)) {
                    $type .= '|'.count($val);
                }

                return $type.'|'.print_r($val, true);
        }
    }
}

if (! function_exists('plog')) {
    function plog(mixed $val = null): string
    {
        return dump_any_val_to_string($val);
    }
}

if (! function_exists('dlog')) {
    function dlog(mixed $val = null): void
    {
        Log::debug(dump_any_val_to_string($val));
    }
}
