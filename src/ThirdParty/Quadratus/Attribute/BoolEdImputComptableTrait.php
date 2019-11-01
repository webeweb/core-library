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
 * Ed imput comptable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdImputComptableTrait {

    /**
     * Ed imput comptable.
     *
     * @var bool
     */
    private $edImputComptable;

    /**
     * Get the ed imput comptable.
     *
     * @return bool Returns the ed imput comptable.
     */
    public function getEdImputComptable() {
        return $this->edImputComptable;
    }

    /**
     * Set the ed imput comptable.
     *
     * @param bool $edImputComptable The ed imput comptable.
     */
    public function setEdImputComptable($edImputComptable) {
        $this->edImputComptable = $edImputComptable;
        return $this;
    }
}
