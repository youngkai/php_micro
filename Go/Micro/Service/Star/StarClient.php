<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Go\Micro\Service\Star;

/**
 */
class StarClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Go\Micro\Service\Star\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Call(\Go\Micro\Service\Star\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/go.micro.service.star.Star/Call',
        $argument,
        ['\Go\Micro\Service\Star\Response', 'decode'],
        $metadata, $options);
    }

}
