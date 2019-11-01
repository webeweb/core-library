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
 * Date26 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate26Trait {

    /**
     * Date26.
     *
     * @var DateTime|null
     */
    private $date26;

    /**
     * Get the date26.
     *
     * @return DateTime|null Returns the date26.
     */
    public function getDate26() {
        return $this->date26;
    }

    /**
     * Set the date26.
     *
     * @param DateTime|null $date26 The date26.
     */
    public function setDate26(DateTime $date26 = null) {
        $this->date26 = $date26;
        return $this;
    }
}
