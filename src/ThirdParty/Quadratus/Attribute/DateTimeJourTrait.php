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
 * Jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeJourTrait {

    /**
     * Jour.
     *
     * @var DateTime|null
     */
    private $jour;

    /**
     * Get the jour.
     *
     * @return DateTime|null Returns the jour.
     */
    public function getJour() {
        return $this->jour;
    }

    /**
     * Set the jour.
     *
     * @param DateTime|null $jour The jour.
     */
    public function setJour(DateTime $jour = null) {
        $this->jour = $jour;
        return $this;
    }
}
