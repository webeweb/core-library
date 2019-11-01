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
 * Date debut amortissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebutAmortissementTrait {

    /**
     * Date debut amortissement.
     *
     * @var DateTime|null
     */
    private $dateDebutAmortissement;

    /**
     * Get the date debut amortissement.
     *
     * @return DateTime|null Returns the date debut amortissement.
     */
    public function getDateDebutAmortissement() {
        return $this->dateDebutAmortissement;
    }

    /**
     * Set the date debut amortissement.
     *
     * @param DateTime|null $dateDebutAmortissement The date debut amortissement.
     */
    public function setDateDebutAmortissement(DateTime $dateDebutAmortissement = null) {
        $this->dateDebutAmortissement = $dateDebutAmortissement;
        return $this;
    }
}
