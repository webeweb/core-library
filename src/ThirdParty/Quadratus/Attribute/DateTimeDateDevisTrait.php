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
 * Date devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDevisTrait {

    /**
     * Date devis.
     *
     * @var DateTime|null
     */
    private $dateDevis;

    /**
     * Get the date devis.
     *
     * @return DateTime|null Returns the date devis.
     */
    public function getDateDevis() {
        return $this->dateDevis;
    }

    /**
     * Set the date devis.
     *
     * @param DateTime|null $dateDevis The date devis.
     */
    public function setDateDevis(DateTime $dateDevis = null) {
        $this->dateDevis = $dateDevis;
        return $this;
    }
}
