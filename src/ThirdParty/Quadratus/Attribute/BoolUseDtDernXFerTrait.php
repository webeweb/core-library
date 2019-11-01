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
 * Use dt dern x fer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUseDtDernXFerTrait {

    /**
     * Use dt dern x fer.
     *
     * @var bool
     */
    private $useDtDernXFer;

    /**
     * Get the use dt dern x fer.
     *
     * @return bool Returns the use dt dern x fer.
     */
    public function getUseDtDernXFer() {
        return $this->useDtDernXFer;
    }

    /**
     * Set the use dt dern x fer.
     *
     * @param bool $useDtDernXFer The use dt dern x fer.
     */
    public function setUseDtDernXFer($useDtDernXFer) {
        $this->useDtDernXFer = $useDtDernXFer;
        return $this;
    }
}
