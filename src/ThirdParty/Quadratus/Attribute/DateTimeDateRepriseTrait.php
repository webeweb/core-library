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
 * Date reprise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRepriseTrait {

    /**
     * Date reprise.
     *
     * @var DateTime|null
     */
    private $dateReprise;

    /**
     * Get the date reprise.
     *
     * @return DateTime|null Returns the date reprise.
     */
    public function getDateReprise() {
        return $this->dateReprise;
    }

    /**
     * Set the date reprise.
     *
     * @param DateTime|null $dateReprise The date reprise.
     */
    public function setDateReprise(DateTime $dateReprise = null) {
        $this->dateReprise = $dateReprise;
        return $this;
    }
}
