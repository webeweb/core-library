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
 * Date dp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDpTrait {

    /**
     * Date dp.
     *
     * @var DateTime|null
     */
    private $dateDp;

    /**
     * Get the date dp.
     *
     * @return DateTime|null Returns the date dp.
     */
    public function getDateDp() {
        return $this->dateDp;
    }

    /**
     * Set the date dp.
     *
     * @param DateTime|null $dateDp The date dp.
     */
    public function setDateDp(DateTime $dateDp = null) {
        $this->dateDp = $dateDp;
        return $this;
    }
}
