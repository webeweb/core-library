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

/**
 * Nb h attente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHAttenteTrait {

    /**
     * Nb h attente.
     *
     * @var float
     */
    private $nbHAttente;

    /**
     * Get the nb h attente.
     *
     * @return float Returns the nb h attente.
     */
    public function getNbHAttente() {
        return $this->nbHAttente;
    }

    /**
     * Set the nb h attente.
     *
     * @param float $nbHAttente The nb h attente.
     */
    public function setNbHAttente($nbHAttente) {
        $this->nbHAttente = $nbHAttente;
        return $this;
    }
}
