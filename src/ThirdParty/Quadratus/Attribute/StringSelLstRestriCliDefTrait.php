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
 * Sel lst restri cli def trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelLstRestriCliDefTrait {

    /**
     * Sel lst restri cli def.
     *
     * @var string
     */
    private $selLstRestriCliDef;

    /**
     * Get the sel lst restri cli def.
     *
     * @return string Returns the sel lst restri cli def.
     */
    public function getSelLstRestriCliDef() {
        return $this->selLstRestriCliDef;
    }

    /**
     * Set the sel lst restri cli def.
     *
     * @param string $selLstRestriCliDef The sel lst restri cli def.
     */
    public function setSelLstRestriCliDef($selLstRestriCliDef) {
        $this->selLstRestriCliDef = $selLstRestriCliDef;
        return $this;
    }
}
