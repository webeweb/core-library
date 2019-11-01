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
 * Date convention fne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateConventionFneTrait {

    /**
     * Date convention fne.
     *
     * @var DateTime|null
     */
    private $dateConventionFne;

    /**
     * Get the date convention fne.
     *
     * @return DateTime|null Returns the date convention fne.
     */
    public function getDateConventionFne() {
        return $this->dateConventionFne;
    }

    /**
     * Set the date convention fne.
     *
     * @param DateTime|null $dateConventionFne The date convention fne.
     */
    public function setDateConventionFne(DateTime $dateConventionFne = null) {
        $this->dateConventionFne = $dateConventionFne;
        return $this;
    }
}
