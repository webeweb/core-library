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
 * T mardi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTMardiTrait {

    /**
     * T mardi.
     *
     * @var bool
     */
    private $tMardi;

    /**
     * Get the t mardi.
     *
     * @return bool Returns the t mardi.
     */
    public function getTMardi() {
        return $this->tMardi;
    }

    /**
     * Set the t mardi.
     *
     * @param bool $tMardi The t mardi.
     */
    public function setTMardi($tMardi) {
        $this->tMardi = $tMardi;
        return $this;
    }
}
