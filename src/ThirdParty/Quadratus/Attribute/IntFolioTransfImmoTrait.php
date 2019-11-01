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
 * Folio transf immo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFolioTransfImmoTrait {

    /**
     * Folio transf immo.
     *
     * @var int
     */
    private $folioTransfImmo;

    /**
     * Get the folio transf immo.
     *
     * @return int Returns the folio transf immo.
     */
    public function getFolioTransfImmo() {
        return $this->folioTransfImmo;
    }

    /**
     * Set the folio transf immo.
     *
     * @param int $folioTransfImmo The folio transf immo.
     */
    public function setFolioTransfImmo($folioTransfImmo) {
        $this->folioTransfImmo = $folioTransfImmo;
        return $this;
    }
}
