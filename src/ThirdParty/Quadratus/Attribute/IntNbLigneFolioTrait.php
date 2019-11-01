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
 * Nb ligne folio trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbLigneFolioTrait {

    /**
     * Nb ligne folio.
     *
     * @var int
     */
    private $nbLigneFolio;

    /**
     * Get the nb ligne folio.
     *
     * @return int Returns the nb ligne folio.
     */
    public function getNbLigneFolio() {
        return $this->nbLigneFolio;
    }

    /**
     * Set the nb ligne folio.
     *
     * @param int $nbLigneFolio The nb ligne folio.
     */
    public function setNbLigneFolio($nbLigneFolio) {
        $this->nbLigneFolio = $nbLigneFolio;
        return $this;
    }
}
