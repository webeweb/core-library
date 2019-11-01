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

use DateTime;

/**
 * Date44 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate44Trait {

    /**
     * Date44.
     *
     * @var DateTime|null
     */
    private $date44;

    /**
     * Get the date44.
     *
     * @return DateTime|null Returns the date44.
     */
    public function getDate44() {
        return $this->date44;
    }

    /**
     * Set the date44.
     *
     * @param DateTime|null $date44 The date44.
     */
    public function setDate44(DateTime $date44 = null) {
        $this->date44 = $date44;
        return $this;
    }
}
