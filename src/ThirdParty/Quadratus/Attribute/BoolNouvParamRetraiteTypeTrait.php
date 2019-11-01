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
 * Nouv param retraite type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNouvParamRetraiteTypeTrait {

    /**
     * Nouv param retraite type.
     *
     * @var bool
     */
    private $nouvParamRetraiteType;

    /**
     * Get the nouv param retraite type.
     *
     * @return bool Returns the nouv param retraite type.
     */
    public function getNouvParamRetraiteType() {
        return $this->nouvParamRetraiteType;
    }

    /**
     * Set the nouv param retraite type.
     *
     * @param bool $nouvParamRetraiteType The nouv param retraite type.
     */
    public function setNouvParamRetraiteType($nouvParamRetraiteType) {
        $this->nouvParamRetraiteType = $nouvParamRetraiteType;
        return $this;
    }
}
