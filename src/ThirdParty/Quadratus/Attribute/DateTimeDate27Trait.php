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
 * Date27 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate27Trait {

    /**
     * Date27.
     *
     * @var DateTime|null
     */
    private $date27;

    /**
     * Get the date27.
     *
     * @return DateTime|null Returns the date27.
     */
    public function getDate27() {
        return $this->date27;
    }

    /**
     * Set the date27.
     *
     * @param DateTime|null $date27 The date27.
     */
    public function setDate27(DateTime $date27 = null) {
        $this->date27 = $date27;
        return $this;
    }
}
