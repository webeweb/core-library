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
 * Fct suppr ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctSupprEcritureTrait {

    /**
     * Fct suppr ecriture.
     *
     * @var bool
     */
    private $fctSupprEcriture;

    /**
     * Get the fct suppr ecriture.
     *
     * @return bool Returns the fct suppr ecriture.
     */
    public function getFctSupprEcriture() {
        return $this->fctSupprEcriture;
    }

    /**
     * Set the fct suppr ecriture.
     *
     * @param bool $fctSupprEcriture The fct suppr ecriture.
     */
    public function setFctSupprEcriture($fctSupprEcriture) {
        $this->fctSupprEcriture = $fctSupprEcriture;
        return $this;
    }
}
