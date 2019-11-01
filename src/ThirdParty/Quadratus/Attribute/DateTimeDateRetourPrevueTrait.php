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
 * Date retour prevue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRetourPrevueTrait {

    /**
     * Date retour prevue.
     *
     * @var DateTime|null
     */
    private $dateRetourPrevue;

    /**
     * Get the date retour prevue.
     *
     * @return DateTime|null Returns the date retour prevue.
     */
    public function getDateRetourPrevue() {
        return $this->dateRetourPrevue;
    }

    /**
     * Set the date retour prevue.
     *
     * @param DateTime|null $dateRetourPrevue The date retour prevue.
     */
    public function setDateRetourPrevue(DateTime $dateRetourPrevue = null) {
        $this->dateRetourPrevue = $dateRetourPrevue;
        return $this;
    }
}
