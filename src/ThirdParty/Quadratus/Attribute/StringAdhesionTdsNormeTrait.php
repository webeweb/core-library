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
 * Adhesion tds norme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdhesionTdsNormeTrait {

    /**
     * Adhesion tds norme.
     *
     * @var string
     */
    private $adhesionTdsNorme;

    /**
     * Get the adhesion tds norme.
     *
     * @return string Returns the adhesion tds norme.
     */
    public function getAdhesionTdsNorme() {
        return $this->adhesionTdsNorme;
    }

    /**
     * Set the adhesion tds norme.
     *
     * @param string $adhesionTdsNorme The adhesion tds norme.
     */
    public function setAdhesionTdsNorme($adhesionTdsNorme) {
        $this->adhesionTdsNorme = $adhesionTdsNorme;
        return $this;
    }
}
