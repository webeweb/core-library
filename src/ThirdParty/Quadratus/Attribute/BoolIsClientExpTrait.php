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
 * Is client exp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsClientExpTrait {

    /**
     * Is client exp.
     *
     * @var bool
     */
    private $isClientExp;

    /**
     * Get the is client exp.
     *
     * @return bool Returns the is client exp.
     */
    public function getIsClientExp() {
        return $this->isClientExp;
    }

    /**
     * Set the is client exp.
     *
     * @param bool $isClientExp The is client exp.
     */
    public function setIsClientExp($isClientExp) {
        $this->isClientExp = $isClientExp;
        return $this;
    }
}
