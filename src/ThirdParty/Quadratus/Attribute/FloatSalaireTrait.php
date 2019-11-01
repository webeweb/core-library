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
 * Salaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireTrait {

    /**
     * Salaire.
     *
     * @var float
     */
    private $salaire;

    /**
     * Get the salaire.
     *
     * @return float Returns the salaire.
     */
    public function getSalaire() {
        return $this->salaire;
    }

    /**
     * Set the salaire.
     *
     * @param float $salaire The salaire.
     */
    public function setSalaire($salaire) {
        $this->salaire = $salaire;
        return $this;
    }
}
