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
 * Mess aspod trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMessAspodTrait {

    /**
     * Mess aspod.
     *
     * @var bool
     */
    private $messAspod;

    /**
     * Get the mess aspod.
     *
     * @return bool Returns the mess aspod.
     */
    public function getMessAspod() {
        return $this->messAspod;
    }

    /**
     * Set the mess aspod.
     *
     * @param bool $messAspod The mess aspod.
     */
    public function setMessAspod($messAspod) {
        $this->messAspod = $messAspod;
        return $this;
    }
}
