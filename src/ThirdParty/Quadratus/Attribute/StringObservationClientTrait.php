<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Observation client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObservationClientTrait {

    /**
     * Observation client.
     *
     * @var string
     */
    private $observationClient;

    /**
     * Get the observation client.
     *
     * @return string Returns the observation client.
     */
    public function getObservationClient() {
        return $this->observationClient;
    }

    /**
     * Set the observation client.
     *
     * @param string $observationClient The observation client.
     */
    public function setObservationClient($observationClient) {
        $this->observationClient = $observationClient;
        return $this;
    }
}
