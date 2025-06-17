<?php

use Illuminate\Http\Request;

class TrustProxies
{
    protected $proxies = ['*'];
protected $headers = [
    Request::HEADER_FORWARDED => 'for',
    Request::HEADER_X_FORWARDED_FOR => 'x-forwarded-for',
    Request::HEADER_X_FORWARDED_HOST => 'x-forwarded-host',
    Request::HEADER_X_FORWARDED_PORT => 'x-forwarded-port',
    Request::HEADER_X_FORWARDED_PROTO => 'x-forwarded-proto',
];
}
