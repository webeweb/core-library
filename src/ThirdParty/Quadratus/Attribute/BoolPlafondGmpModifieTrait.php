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
 * Plafond gmp modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlafondGmpModifieTrait {

    /**
     * Plafond gmp modifie.
     *
     * @var bool
     */
    private $plafondGmpModifie;

    /**
     * Get the plafond gmp modifie.
     *
     * @return bool Returns the plafond gmp modifie.
     */
    public function getPlafondGmpModifie() {
        return $this->plafondGmpModifie;
    }

    /**
     * Set the plafond gmp modifie.
     *
     * @param bool $plafondGmpModifie The plafond gmp modifie.
     */
    public function setPlafondGmpModifie($plafondGmpModifie) {
        $this->plafondGmpModifie = $plafondGmpModifie;
        return $this;
    }
}
