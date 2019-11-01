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
 * Folio jv prestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFolioJvPrestationTrait {

    /**
     * Folio jv prestation.
     *
     * @var string
     */
    private $folioJvPrestation;

    /**
     * Get the folio jv prestation.
     *
     * @return string Returns the folio jv prestation.
     */
    public function getFolioJvPrestation() {
        return $this->folioJvPrestation;
    }

    /**
     * Set the folio jv prestation.
     *
     * @param string $folioJvPrestation The folio jv prestation.
     */
    public function setFolioJvPrestation($folioJvPrestation) {
        $this->folioJvPrestation = $folioJvPrestation;
        return $this;
    }
}
