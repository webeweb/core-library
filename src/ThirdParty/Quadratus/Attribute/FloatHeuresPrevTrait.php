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
 * Heures prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresPrevTrait {

    /**
     * Heures prev.
     *
     * @var float
     */
    private $heuresPrev;

    /**
     * Get the heures prev.
     *
     * @return float Returns the heures prev.
     */
    public function getHeuresPrev() {
        return $this->heuresPrev;
    }

    /**
     * Set the heures prev.
     *
     * @param float $heuresPrev The heures prev.
     */
    public function setHeuresPrev($heuresPrev) {
        $this->heuresPrev = $heuresPrev;
        return $this;
    }
}
