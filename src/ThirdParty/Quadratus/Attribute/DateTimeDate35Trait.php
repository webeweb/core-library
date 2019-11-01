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
 * Date35 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate35Trait {

    /**
     * Date35.
     *
     * @var DateTime|null
     */
    private $date35;

    /**
     * Get the date35.
     *
     * @return DateTime|null Returns the date35.
     */
    public function getDate35() {
        return $this->date35;
    }

    /**
     * Set the date35.
     *
     * @param DateTime|null $date35 The date35.
     */
    public function setDate35(DateTime $date35 = null) {
        $this->date35 = $date35;
        return $this;
    }
}
