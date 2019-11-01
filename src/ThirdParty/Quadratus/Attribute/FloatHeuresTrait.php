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
 * Heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresTrait {

    /**
     * Heures.
     *
     * @var float
     */
    private $heures;

    /**
     * Get the heures.
     *
     * @return float Returns the heures.
     */
    public function getHeures() {
        return $this->heures;
    }

    /**
     * Set the heures.
     *
     * @param float $heures The heures.
     */
    public function setHeures($heures) {
        $this->heures = $heures;
        return $this;
    }
}
