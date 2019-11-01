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
 * Lignes transport trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLignesTransportTrait {

    /**
     * Lignes transport.
     *
     * @var bool
     */
    private $lignesTransport;

    /**
     * Get the lignes transport.
     *
     * @return bool Returns the lignes transport.
     */
    public function getLignesTransport() {
        return $this->lignesTransport;
    }

    /**
     * Set the lignes transport.
     *
     * @param bool $lignesTransport The lignes transport.
     */
    public function setLignesTransport($lignesTransport) {
        $this->lignesTransport = $lignesTransport;
        return $this;
    }
}
