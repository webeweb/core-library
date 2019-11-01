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
 * Date evenement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEvenementTrait {

    /**
     * Date evenement.
     *
     * @var DateTime|null
     */
    private $dateEvenement;

    /**
     * Get the date evenement.
     *
     * @return DateTime|null Returns the date evenement.
     */
    public function getDateEvenement() {
        return $this->dateEvenement;
    }

    /**
     * Set the date evenement.
     *
     * @param DateTime|null $dateEvenement The date evenement.
     */
    public function setDateEvenement(DateTime $dateEvenement = null) {
        $this->dateEvenement = $dateEvenement;
        return $this;
    }
}
