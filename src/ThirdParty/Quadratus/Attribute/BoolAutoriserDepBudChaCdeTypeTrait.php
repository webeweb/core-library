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
 * Autoriser dep bud cha cde type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoriserDepBudChaCdeTypeTrait {

    /**
     * Autoriser dep bud cha cde type.
     *
     * @var bool
     */
    private $autoriserDepBudChaCdeType;

    /**
     * Get the autoriser dep bud cha cde type.
     *
     * @return bool Returns the autoriser dep bud cha cde type.
     */
    public function getAutoriserDepBudChaCdeType() {
        return $this->autoriserDepBudChaCdeType;
    }

    /**
     * Set the autoriser dep bud cha cde type.
     *
     * @param bool $autoriserDepBudChaCdeType The autoriser dep bud cha cde type.
     */
    public function setAutoriserDepBudChaCdeType($autoriserDepBudChaCdeType) {
        $this->autoriserDepBudChaCdeType = $autoriserDepBudChaCdeType;
        return $this;
    }
}
