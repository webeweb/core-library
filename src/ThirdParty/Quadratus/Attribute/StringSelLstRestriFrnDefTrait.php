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
 * Sel lst restri frn def trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelLstRestriFrnDefTrait {

    /**
     * Sel lst restri frn def.
     *
     * @var string
     */
    private $selLstRestriFrnDef;

    /**
     * Get the sel lst restri frn def.
     *
     * @return string Returns the sel lst restri frn def.
     */
    public function getSelLstRestriFrnDef() {
        return $this->selLstRestriFrnDef;
    }

    /**
     * Set the sel lst restri frn def.
     *
     * @param string $selLstRestriFrnDef The sel lst restri frn def.
     */
    public function setSelLstRestriFrnDef($selLstRestriFrnDef) {
        $this->selLstRestriFrnDef = $selLstRestriFrnDef;
        return $this;
    }
}
