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
 * Date transf cb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfCbTrait {

    /**
     * Date transf cb.
     *
     * @var DateTime|null
     */
    private $dateTransfCb;

    /**
     * Get the date transf cb.
     *
     * @return DateTime|null Returns the date transf cb.
     */
    public function getDateTransfCb() {
        return $this->dateTransfCb;
    }

    /**
     * Set the date transf cb.
     *
     * @param DateTime|null $dateTransfCb The date transf cb.
     */
    public function setDateTransfCb(DateTime $dateTransfCb = null) {
        $this->dateTransfCb = $dateTransfCb;
        return $this;
    }
}
