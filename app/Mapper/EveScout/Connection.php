<?php


namespace Exodus4D\ESI\Mapper\EveScout;

use data\mapper;

class Connection extends mapper\AbstractIterator {

    /**
     * @var array
     */
    protected static $map = [
        'id'                                => 'id',
        'type'                              => 'type',

        'status'                            => ['state' => 'name'],
        'statusUpdatedAt'                   => ['state' => 'updated'],

        'solarSystemId'                     => ['source' => 'id'],
        'wormholeDestinationSolarSystemId'  => ['target' => 'id'],

        'signatureId'                       => ['sourceSignature' => 'name'],
        'sourceWormholeType'                => ['sourceSignature' => 'type'],

        'wormholeDestinationSignatureId'    => ['targetSignature' => 'name'],
        'destinationWormholeType'           => ['targetSignature' => 'type'],

        'wormholeMass'                      => ['wormhole' => 'mass'],
        'wormholeEol'                       => ['wormhole' => 'eol'],

        'createdAt'                         => ['created' => 'created'],
        'updatedAt'                         => ['updated' => 'updated']
    ];
}