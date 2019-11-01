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
 * Echeance forcee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEcheanceForceeTrait {

    /**
     * Echeance forcee.
     *
     * @var bool
     */
    private $echeanceForcee;

    /**
     * Get the echeance forcee.
     *
     * @return bool Returns the echeance forcee.
     */
    public function getEcheanceForcee() {
        return $this->echeanceForcee;
    }

    /**
     * Set the echeance forcee.
     *
     * @param bool $echeanceForcee The echeance forcee.
     */
    public function setEcheanceForcee($echeanceForcee) {
        $this->echeanceForcee = $echeanceForcee;
        return $this;
    }
}
