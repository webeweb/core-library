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
 * Fct modif ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifEcritureTrait {

    /**
     * Fct modif ecriture.
     *
     * @var bool
     */
    private $fctModifEcriture;

    /**
     * Get the fct modif ecriture.
     *
     * @return bool Returns the fct modif ecriture.
     */
    public function getFctModifEcriture() {
        return $this->fctModifEcriture;
    }

    /**
     * Set the fct modif ecriture.
     *
     * @param bool $fctModifEcriture The fct modif ecriture.
     */
    public function setFctModifEcriture($fctModifEcriture) {
        $this->fctModifEcriture = $fctModifEcriture;
        return $this;
    }
}
