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
 * Date pha trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePhaTrait {

    /**
     * Date pha.
     *
     * @var DateTime|null
     */
    private $datePha;

    /**
     * Get the date pha.
     *
     * @return DateTime|null Returns the date pha.
     */
    public function getDatePha() {
        return $this->datePha;
    }

    /**
     * Set the date pha.
     *
     * @param DateTime|null $datePha The date pha.
     */
    public function setDatePha(DateTime $datePha = null) {
        $this->datePha = $datePha;
        return $this;
    }
}
