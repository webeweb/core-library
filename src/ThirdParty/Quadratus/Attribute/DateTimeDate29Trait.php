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
 * Date29 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate29Trait {

    /**
     * Date29.
     *
     * @var DateTime|null
     */
    private $date29;

    /**
     * Get the date29.
     *
     * @return DateTime|null Returns the date29.
     */
    public function getDate29() {
        return $this->date29;
    }

    /**
     * Set the date29.
     *
     * @param DateTime|null $date29 The date29.
     */
    public function setDate29(DateTime $date29 = null) {
        $this->date29 = $date29;
        return $this;
    }
}
