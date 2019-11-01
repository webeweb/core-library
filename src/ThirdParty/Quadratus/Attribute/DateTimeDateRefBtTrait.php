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
 * Date ref bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRefBtTrait {

    /**
     * Date ref bt.
     *
     * @var DateTime|null
     */
    private $dateRefBt;

    /**
     * Get the date ref bt.
     *
     * @return DateTime|null Returns the date ref bt.
     */
    public function getDateRefBt() {
        return $this->dateRefBt;
    }

    /**
     * Set the date ref bt.
     *
     * @param DateTime|null $dateRefBt The date ref bt.
     */
    public function setDateRefBt(DateTime $dateRefBt = null) {
        $this->dateRefBt = $dateRefBt;
        return $this;
    }
}
