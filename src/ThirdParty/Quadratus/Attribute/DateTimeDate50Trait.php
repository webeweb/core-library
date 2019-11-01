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
 * Date50 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDate50Trait {

    /**
     * Date50.
     *
     * @var DateTime|null
     */
    private $date50;

    /**
     * Get the date50.
     *
     * @return DateTime|null Returns the date50.
     */
    public function getDate50() {
        return $this->date50;
    }

    /**
     * Set the date50.
     *
     * @param DateTime|null $date50 The date50.
     */
    public function setDate50(DateTime $date50 = null) {
        $this->date50 = $date50;
        return $this;
    }
}
