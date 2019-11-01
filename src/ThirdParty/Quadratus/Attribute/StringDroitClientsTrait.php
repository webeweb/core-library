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
 * Droit clients trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitClientsTrait {

    /**
     * Droit clients.
     *
     * @var string
     */
    private $droitClients;

    /**
     * Get the droit clients.
     *
     * @return string Returns the droit clients.
     */
    public function getDroitClients() {
        return $this->droitClients;
    }

    /**
     * Set the droit clients.
     *
     * @param string $droitClients The droit clients.
     */
    public function setDroitClients($droitClients) {
        $this->droitClients = $droitClients;
        return $this;
    }
}
