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
 * Valide de trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeValideDeTrait {

    /**
     * Valide de.
     *
     * @var DateTime|null
     */
    private $valideDe;

    /**
     * Get the valide de.
     *
     * @return DateTime|null Returns the valide de.
     */
    public function getValideDe() {
        return $this->valideDe;
    }

    /**
     * Set the valide de.
     *
     * @param DateTime|null $valideDe The valide de.
     */
    public function setValideDe(DateTime $valideDe = null) {
        $this->valideDe = $valideDe;
        return $this;
    }
}
