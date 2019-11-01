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
 * Date ouverture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateOuvertureTrait {

    /**
     * Date ouverture.
     *
     * @var DateTime|null
     */
    private $dateOuverture;

    /**
     * Get the date ouverture.
     *
     * @return DateTime|null Returns the date ouverture.
     */
    public function getDateOuverture() {
        return $this->dateOuverture;
    }

    /**
     * Set the date ouverture.
     *
     * @param DateTime|null $dateOuverture The date ouverture.
     */
    public function setDateOuverture(DateTime $dateOuverture = null) {
        $this->dateOuverture = $dateOuverture;
        return $this;
    }
}
