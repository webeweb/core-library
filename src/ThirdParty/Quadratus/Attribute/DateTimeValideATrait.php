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
 * Valide a trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeValideATrait {

    /**
     * Valide a.
     *
     * @var DateTime|null
     */
    private $valideA;

    /**
     * Get the valide a.
     *
     * @return DateTime|null Returns the valide a.
     */
    public function getValideA() {
        return $this->valideA;
    }

    /**
     * Set the valide a.
     *
     * @param DateTime|null $valideA The valide a.
     */
    public function setValideA(DateTime $valideA = null) {
        $this->valideA = $valideA;
        return $this;
    }
}
