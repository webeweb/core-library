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
 * Duree validee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDureeValideeTrait {

    /**
     * Duree validee.
     *
     * @var float
     */
    private $dureeValidee;

    /**
     * Get the duree validee.
     *
     * @return float Returns the duree validee.
     */
    public function getDureeValidee() {
        return $this->dureeValidee;
    }

    /**
     * Set the duree validee.
     *
     * @param float $dureeValidee The duree validee.
     */
    public function setDureeValidee($dureeValidee) {
        $this->dureeValidee = $dureeValidee;
        return $this;
    }
}
