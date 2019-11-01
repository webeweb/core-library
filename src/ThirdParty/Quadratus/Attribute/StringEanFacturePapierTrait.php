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
 * Ean facture papier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEanFacturePapierTrait {

    /**
     * Ean facture papier.
     *
     * @var string
     */
    private $eanFacturePapier;

    /**
     * Get the ean facture papier.
     *
     * @return string Returns the ean facture papier.
     */
    public function getEanFacturePapier() {
        return $this->eanFacturePapier;
    }

    /**
     * Set the ean facture papier.
     *
     * @param string $eanFacturePapier The ean facture papier.
     */
    public function setEanFacturePapier($eanFacturePapier) {
        $this->eanFacturePapier = $eanFacturePapier;
        return $this;
    }
}
