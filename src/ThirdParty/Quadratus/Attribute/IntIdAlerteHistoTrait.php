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
 * Id alerte histo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdAlerteHistoTrait {

    /**
     * Id alerte histo.
     *
     * @var int
     */
    private $idAlerteHisto;

    /**
     * Get the id alerte histo.
     *
     * @return int Returns the id alerte histo.
     */
    public function getIdAlerteHisto() {
        return $this->idAlerteHisto;
    }

    /**
     * Set the id alerte histo.
     *
     * @param int $idAlerteHisto The id alerte histo.
     */
    public function setIdAlerteHisto($idAlerteHisto) {
        $this->idAlerteHisto = $idAlerteHisto;
        return $this;
    }
}
