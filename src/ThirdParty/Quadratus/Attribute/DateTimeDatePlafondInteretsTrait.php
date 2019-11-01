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
 * Date plafond interets trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePlafondInteretsTrait {

    /**
     * Date plafond interets.
     *
     * @var DateTime|null
     */
    private $datePlafondInterets;

    /**
     * Get the date plafond interets.
     *
     * @return DateTime|null Returns the date plafond interets.
     */
    public function getDatePlafondInterets() {
        return $this->datePlafondInterets;
    }

    /**
     * Set the date plafond interets.
     *
     * @param DateTime|null $datePlafondInterets The date plafond interets.
     */
    public function setDatePlafondInterets(DateTime $datePlafondInterets = null) {
        $this->datePlafondInterets = $datePlafondInterets;
        return $this;
    }
}
