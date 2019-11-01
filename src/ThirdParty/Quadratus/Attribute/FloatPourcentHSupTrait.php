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
 * Pourcent h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentHSupTrait {

    /**
     * Pourcent h sup.
     *
     * @var float
     */
    private $pourcentHSup;

    /**
     * Get the pourcent h sup.
     *
     * @return float Returns the pourcent h sup.
     */
    public function getPourcentHSup() {
        return $this->pourcentHSup;
    }

    /**
     * Set the pourcent h sup.
     *
     * @param float $pourcentHSup The pourcent h sup.
     */
    public function setPourcentHSup($pourcentHSup) {
        $this->pourcentHSup = $pourcentHSup;
        return $this;
    }
}
