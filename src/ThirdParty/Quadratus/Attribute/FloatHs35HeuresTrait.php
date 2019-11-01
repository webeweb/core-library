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
 * Hs35 heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHs35HeuresTrait {

    /**
     * Hs35 heures.
     *
     * @var float
     */
    private $hs35Heures;

    /**
     * Get the hs35 heures.
     *
     * @return float Returns the hs35 heures.
     */
    public function getHs35Heures() {
        return $this->hs35Heures;
    }

    /**
     * Set the hs35 heures.
     *
     * @param float $hs35Heures The hs35 heures.
     */
    public function setHs35Heures($hs35Heures) {
        $this->hs35Heures = $hs35Heures;
        return $this;
    }
}
