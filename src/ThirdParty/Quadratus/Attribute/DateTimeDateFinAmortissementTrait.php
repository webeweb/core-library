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
 * Date fin amortissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinAmortissementTrait {

    /**
     * Date fin amortissement.
     *
     * @var DateTime|null
     */
    private $dateFinAmortissement;

    /**
     * Get the date fin amortissement.
     *
     * @return DateTime|null Returns the date fin amortissement.
     */
    public function getDateFinAmortissement() {
        return $this->dateFinAmortissement;
    }

    /**
     * Set the date fin amortissement.
     *
     * @param DateTime|null $dateFinAmortissement The date fin amortissement.
     */
    public function setDateFinAmortissement(DateTime $dateFinAmortissement = null) {
        $this->dateFinAmortissement = $dateFinAmortissement;
        return $this;
    }
}
