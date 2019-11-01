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
 * Cpt entretien trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptEntretienTrait {

    /**
     * Cpt entretien.
     *
     * @var string
     */
    private $cptEntretien;

    /**
     * Get the cpt entretien.
     *
     * @return string Returns the cpt entretien.
     */
    public function getCptEntretien() {
        return $this->cptEntretien;
    }

    /**
     * Set the cpt entretien.
     *
     * @param string $cptEntretien The cpt entretien.
     */
    public function setCptEntretien($cptEntretien) {
        $this->cptEntretien = $cptEntretien;
        return $this;
    }
}
