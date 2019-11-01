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
 * Pas taches operationnelles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasTachesOperationnellesTrait {

    /**
     * Pas taches operationnelles.
     *
     * @var bool
     */
    private $pasTachesOperationnelles;

    /**
     * Get the pas taches operationnelles.
     *
     * @return bool Returns the pas taches operationnelles.
     */
    public function getPasTachesOperationnelles() {
        return $this->pasTachesOperationnelles;
    }

    /**
     * Set the pas taches operationnelles.
     *
     * @param bool $pasTachesOperationnelles The pas taches operationnelles.
     */
    public function setPasTachesOperationnelles($pasTachesOperationnelles) {
        $this->pasTachesOperationnelles = $pasTachesOperationnelles;
        return $this;
    }
}
