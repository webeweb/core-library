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
 * Per reference nb heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPerReferenceNbHeuresTrait {

    /**
     * Per reference nb heures.
     *
     * @var float
     */
    private $perReferenceNbHeures;

    /**
     * Get the per reference nb heures.
     *
     * @return float Returns the per reference nb heures.
     */
    public function getPerReferenceNbHeures() {
        return $this->perReferenceNbHeures;
    }

    /**
     * Set the per reference nb heures.
     *
     * @param float $perReferenceNbHeures The per reference nb heures.
     */
    public function setPerReferenceNbHeures($perReferenceNbHeures) {
        $this->perReferenceNbHeures = $perReferenceNbHeures;
        return $this;
    }
}
