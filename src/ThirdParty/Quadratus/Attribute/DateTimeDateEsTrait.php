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
 * Date es trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEsTrait {

    /**
     * Date es.
     *
     * @var DateTime|null
     */
    private $dateEs;

    /**
     * Get the date es.
     *
     * @return DateTime|null Returns the date es.
     */
    public function getDateEs() {
        return $this->dateEs;
    }

    /**
     * Set the date es.
     *
     * @param DateTime|null $dateEs The date es.
     */
    public function setDateEs(DateTime $dateEs = null) {
        $this->dateEs = $dateEs;
        return $this;
    }
}
