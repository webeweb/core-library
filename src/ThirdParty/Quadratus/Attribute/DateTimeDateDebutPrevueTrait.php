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
 * Date debut prevue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutPrevueTrait {

    /**
     * Date debut prevue.
     *
     * @var DateTime|null
     */
    private $dateDebutPrevue;

    /**
     * Get the date debut prevue.
     *
     * @return DateTime|null Returns the date debut prevue.
     */
    public function getDateDebutPrevue() {
        return $this->dateDebutPrevue;
    }

    /**
     * Set the date debut prevue.
     *
     * @param DateTime|null $dateDebutPrevue The date debut prevue.
     */
    public function setDateDebutPrevue(DateTime $dateDebutPrevue = null) {
        $this->dateDebutPrevue = $dateDebutPrevue;
        return $this;
    }
}
