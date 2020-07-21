<?php

namespace channel;

use Go\Micro\Service\Star\StarClient;
use Grpc\ChannelCredentials;

class channels {
    public function myService() {
        $client = new StarClient('127.0.0.1:49758', [
            'credentials' => ChannelCredentials::createInsecure()
        ]);
        return $client;
    }
}
