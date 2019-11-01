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
 * Date ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEcritureTrait {

    /**
     * Date ecriture.
     *
     * @var DateTime|null
     */
    private $dateEcriture;

    /**
     * Get the date ecriture.
     *
     * @return DateTime|null Returns the date ecriture.
     */
    public function getDateEcriture() {
        return $this->dateEcriture;
    }

    /**
     * Set the date ecriture.
     *
     * @param DateTime|null $dateEcriture The date ecriture.
     */
    public function setDateEcriture(DateTime $dateEcriture = null) {
        $this->dateEcriture = $dateEcriture;
        return $this;
    }
}
