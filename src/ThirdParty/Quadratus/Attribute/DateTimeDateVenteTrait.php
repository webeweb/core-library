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
 * Date vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateVenteTrait {

    /**
     * Date vente.
     *
     * @var DateTime|null
     */
    private $dateVente;

    /**
     * Get the date vente.
     *
     * @return DateTime|null Returns the date vente.
     */
    public function getDateVente() {
        return $this->dateVente;
    }

    /**
     * Set the date vente.
     *
     * @param DateTime|null $dateVente The date vente.
     */
    public function setDateVente(DateTime $dateVente = null) {
        $this->dateVente = $dateVente;
        return $this;
    }
}
