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
 * Date transf lf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfLfTrait {

    /**
     * Date transf lf.
     *
     * @var DateTime|null
     */
    private $dateTransfLf;

    /**
     * Get the date transf lf.
     *
     * @return DateTime|null Returns the date transf lf.
     */
    public function getDateTransfLf() {
        return $this->dateTransfLf;
    }

    /**
     * Set the date transf lf.
     *
     * @param DateTime|null $dateTransfLf The date transf lf.
     */
    public function setDateTransfLf(DateTime $dateTransfLf = null) {
        $this->dateTransfLf = $dateTransfLf;
        return $this;
    }
}
