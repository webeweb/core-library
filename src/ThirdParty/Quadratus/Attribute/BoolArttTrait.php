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
 * Artt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArttTrait {

    /**
     * Artt.
     *
     * @var bool
     */
    private $artt;

    /**
     * Get the artt.
     *
     * @return bool Returns the artt.
     */
    public function getArtt() {
        return $this->artt;
    }

    /**
     * Set the artt.
     *
     * @param bool $artt The artt.
     */
    public function setArtt($artt) {
        $this->artt = $artt;
        return $this;
    }
}
