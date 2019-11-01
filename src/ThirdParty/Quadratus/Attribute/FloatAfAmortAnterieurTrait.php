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
 * Af amort anterieur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfAmortAnterieurTrait {

    /**
     * Af amort anterieur.
     *
     * @var float
     */
    private $afAmortAnterieur;

    /**
     * Get the af amort anterieur.
     *
     * @return float Returns the af amort anterieur.
     */
    public function getAfAmortAnterieur() {
        return $this->afAmortAnterieur;
    }

    /**
     * Set the af amort anterieur.
     *
     * @param float $afAmortAnterieur The af amort anterieur.
     */
    public function setAfAmortAnterieur($afAmortAnterieur) {
        $this->afAmortAnterieur = $afAmortAnterieur;
        return $this;
    }
}
