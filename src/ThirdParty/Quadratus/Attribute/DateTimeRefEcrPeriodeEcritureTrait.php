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
 * Ref ecr periode ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeRefEcrPeriodeEcritureTrait {

    /**
     * Ref ecr periode ecriture.
     *
     * @var DateTime|null
     */
    private $refEcrPeriodeEcriture;

    /**
     * Get the ref ecr periode ecriture.
     *
     * @return DateTime|null Returns the ref ecr periode ecriture.
     */
    public function getRefEcrPeriodeEcriture() {
        return $this->refEcrPeriodeEcriture;
    }

    /**
     * Set the ref ecr periode ecriture.
     *
     * @param DateTime|null $refEcrPeriodeEcriture The ref ecr periode ecriture.
     */
    public function setRefEcrPeriodeEcriture(DateTime $refEcrPeriodeEcriture = null) {
        $this->refEcrPeriodeEcriture = $refEcrPeriodeEcriture;
        return $this;
    }
}
