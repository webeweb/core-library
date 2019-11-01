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
 * Entretien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEntretienTrait {

    /**
     * Entretien.
     *
     * @var float
     */
    private $entretien;

    /**
     * Get the entretien.
     *
     * @return float Returns the entretien.
     */
    public function getEntretien() {
        return $this->entretien;
    }

    /**
     * Set the entretien.
     *
     * @param float $entretien The entretien.
     */
    public function setEntretien($entretien) {
        $this->entretien = $entretien;
        return $this;
    }
}
