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
 * Date bm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateBmTrait {

    /**
     * Date bm.
     *
     * @var DateTime|null
     */
    private $dateBm;

    /**
     * Get the date bm.
     *
     * @return DateTime|null Returns the date bm.
     */
    public function getDateBm() {
        return $this->dateBm;
    }

    /**
     * Set the date bm.
     *
     * @param DateTime|null $dateBm The date bm.
     */
    public function setDateBm(DateTime $dateBm = null) {
        $this->dateBm = $dateBm;
        return $this;
    }
}
