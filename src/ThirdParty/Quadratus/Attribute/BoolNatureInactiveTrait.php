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
 * Nature inactive trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNatureInactiveTrait {

    /**
     * Nature inactive.
     *
     * @var bool
     */
    private $natureInactive;

    /**
     * Get the nature inactive.
     *
     * @return bool Returns the nature inactive.
     */
    public function getNatureInactive() {
        return $this->natureInactive;
    }

    /**
     * Set the nature inactive.
     *
     * @param bool $natureInactive The nature inactive.
     */
    public function setNatureInactive($natureInactive) {
        $this->natureInactive = $natureInactive;
        return $this;
    }
}
