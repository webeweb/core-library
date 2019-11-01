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
 * Date11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate11Trait {

    /**
     * Date11.
     *
     * @var DateTime|null
     */
    private $date11;

    /**
     * Get the date11.
     *
     * @return DateTime|null Returns the date11.
     */
    public function getDate11() {
        return $this->date11;
    }

    /**
     * Set the date11.
     *
     * @param DateTime|null $date11 The date11.
     */
    public function setDate11(DateTime $date11 = null) {
        $this->date11 = $date11;
        return $this;
    }
}
