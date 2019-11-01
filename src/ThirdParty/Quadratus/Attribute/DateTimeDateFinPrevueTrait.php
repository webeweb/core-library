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
 * Date fin prevue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinPrevueTrait {

    /**
     * Date fin prevue.
     *
     * @var DateTime|null
     */
    private $dateFinPrevue;

    /**
     * Get the date fin prevue.
     *
     * @return DateTime|null Returns the date fin prevue.
     */
    public function getDateFinPrevue() {
        return $this->dateFinPrevue;
    }

    /**
     * Set the date fin prevue.
     *
     * @param DateTime|null $dateFinPrevue The date fin prevue.
     */
    public function setDateFinPrevue(DateTime $dateFinPrevue = null) {
        $this->dateFinPrevue = $dateFinPrevue;
        return $this;
    }
}
