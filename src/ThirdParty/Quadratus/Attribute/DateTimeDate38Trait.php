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
 * Date38 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate38Trait {

    /**
     * Date38.
     *
     * @var DateTime|null
     */
    private $date38;

    /**
     * Get the date38.
     *
     * @return DateTime|null Returns the date38.
     */
    public function getDate38() {
        return $this->date38;
    }

    /**
     * Set the date38.
     *
     * @param DateTime|null $date38 The date38.
     */
    public function setDate38(DateTime $date38 = null) {
        $this->date38 = $date38;
        return $this;
    }
}
