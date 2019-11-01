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
 * Date derniere vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDerniereVenteTrait {

    /**
     * Date derniere vente.
     *
     * @var DateTime|null
     */
    private $dateDerniereVente;

    /**
     * Get the date derniere vente.
     *
     * @return DateTime|null Returns the date derniere vente.
     */
    public function getDateDerniereVente() {
        return $this->dateDerniereVente;
    }

    /**
     * Set the date derniere vente.
     *
     * @param DateTime|null $dateDerniereVente The date derniere vente.
     */
    public function setDateDerniereVente(DateTime $dateDerniereVente = null) {
        $this->dateDerniereVente = $dateDerniereVente;
        return $this;
    }
}
