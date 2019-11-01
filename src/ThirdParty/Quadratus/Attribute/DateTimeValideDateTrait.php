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
 * Valide date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeValideDateTrait {

    /**
     * Valide date.
     *
     * @var DateTime|null
     */
    private $valideDate;

    /**
     * Get the valide date.
     *
     * @return DateTime|null Returns the valide date.
     */
    public function getValideDate() {
        return $this->valideDate;
    }

    /**
     * Set the valide date.
     *
     * @param DateTime|null $valideDate The valide date.
     */
    public function setValideDate(DateTime $valideDate = null) {
        $this->valideDate = $valideDate;
        return $this;
    }
}
