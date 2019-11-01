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
 * Detail echeance cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailEcheanceCptaTrait {

    /**
     * Detail echeance cpta.
     *
     * @var bool
     */
    private $detailEcheanceCpta;

    /**
     * Get the detail echeance cpta.
     *
     * @return bool Returns the detail echeance cpta.
     */
    public function getDetailEcheanceCpta() {
        return $this->detailEcheanceCpta;
    }

    /**
     * Set the detail echeance cpta.
     *
     * @param bool $detailEcheanceCpta The detail echeance cpta.
     */
    public function setDetailEcheanceCpta($detailEcheanceCpta) {
        $this->detailEcheanceCpta = $detailEcheanceCpta;
        return $this;
    }
}
