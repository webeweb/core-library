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
 * Dt debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebutTrait {

    /**
     * Dt debut.
     *
     * @var DateTime|null
     */
    private $dtDebut;

    /**
     * Get the dt debut.
     *
     * @return DateTime|null Returns the dt debut.
     */
    public function getDtDebut() {
        return $this->dtDebut;
    }

    /**
     * Set the dt debut.
     *
     * @param DateTime|null $dtDebut The dt debut.
     */
    public function setDtDebut(DateTime $dtDebut = null) {
        $this->dtDebut = $dtDebut;
        return $this;
    }
}
