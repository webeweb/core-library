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
 * Exigible le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeExigibleLeTrait {

    /**
     * Exigible le.
     *
     * @var DateTime|null
     */
    private $exigibleLe;

    /**
     * Get the exigible le.
     *
     * @return DateTime|null Returns the exigible le.
     */
    public function getExigibleLe() {
        return $this->exigibleLe;
    }

    /**
     * Set the exigible le.
     *
     * @param DateTime|null $exigibleLe The exigible le.
     */
    public function setExigibleLe(DateTime $exigibleLe = null) {
        $this->exigibleLe = $exigibleLe;
        return $this;
    }
}
