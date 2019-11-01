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
 * Tp interdit qte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpInterditQteTrait {

    /**
     * Tp interdit qte.
     *
     * @var bool
     */
    private $tpInterditQte;

    /**
     * Get the tp interdit qte.
     *
     * @return bool Returns the tp interdit qte.
     */
    public function getTpInterditQte() {
        return $this->tpInterditQte;
    }

    /**
     * Set the tp interdit qte.
     *
     * @param bool $tpInterditQte The tp interdit qte.
     */
    public function setTpInterditQte($tpInterditQte) {
        $this->tpInterditQte = $tpInterditQte;
        return $this;
    }
}
