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
 * Echeance simple trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeEcheanceSimpleTrait {

    /**
     * Echeance simple.
     *
     * @var DateTime|null
     */
    private $echeanceSimple;

    /**
     * Get the echeance simple.
     *
     * @return DateTime|null Returns the echeance simple.
     */
    public function getEcheanceSimple() {
        return $this->echeanceSimple;
    }

    /**
     * Set the echeance simple.
     *
     * @param DateTime|null $echeanceSimple The echeance simple.
     */
    public function setEcheanceSimple(DateTime $echeanceSimple = null) {
        $this->echeanceSimple = $echeanceSimple;
        return $this;
    }
}
