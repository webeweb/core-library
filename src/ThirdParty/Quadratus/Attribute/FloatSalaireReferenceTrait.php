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
 * Salaire reference trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireReferenceTrait {

    /**
     * Salaire reference.
     *
     * @var float
     */
    private $salaireReference;

    /**
     * Get the salaire reference.
     *
     * @return float Returns the salaire reference.
     */
    public function getSalaireReference() {
        return $this->salaireReference;
    }

    /**
     * Set the salaire reference.
     *
     * @param float $salaireReference The salaire reference.
     */
    public function setSalaireReference($salaireReference) {
        $this->salaireReference = $salaireReference;
        return $this;
    }
}
