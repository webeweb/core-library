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
 * Avenant h rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvenantHRemplTrait {

    /**
     * Avenant h rempl.
     *
     * @var bool
     */
    private $avenantHRempl;

    /**
     * Get the avenant h rempl.
     *
     * @return bool Returns the avenant h rempl.
     */
    public function getAvenantHRempl() {
        return $this->avenantHRempl;
    }

    /**
     * Set the avenant h rempl.
     *
     * @param bool $avenantHRempl The avenant h rempl.
     */
    public function setAvenantHRempl($avenantHRempl) {
        $this->avenantHRempl = $avenantHRempl;
        return $this;
    }
}
