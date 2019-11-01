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
 * Ed taux sal base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdTauxSalBaseTrait {

    /**
     * Ed taux sal base.
     *
     * @var bool
     */
    private $edTauxSalBase;

    /**
     * Get the ed taux sal base.
     *
     * @return bool Returns the ed taux sal base.
     */
    public function getEdTauxSalBase() {
        return $this->edTauxSalBase;
    }

    /**
     * Set the ed taux sal base.
     *
     * @param bool $edTauxSalBase The ed taux sal base.
     */
    public function setEdTauxSalBase($edTauxSalBase) {
        $this->edTauxSalBase = $edTauxSalBase;
        return $this;
    }
}
