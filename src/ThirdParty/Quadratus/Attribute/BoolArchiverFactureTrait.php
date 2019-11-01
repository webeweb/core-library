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
 * Archiver facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchiverFactureTrait {

    /**
     * Archiver facture.
     *
     * @var bool
     */
    private $archiverFacture;

    /**
     * Get the archiver facture.
     *
     * @return bool Returns the archiver facture.
     */
    public function getArchiverFacture() {
        return $this->archiverFacture;
    }

    /**
     * Set the archiver facture.
     *
     * @param bool $archiverFacture The archiver facture.
     */
    public function setArchiverFacture($archiverFacture) {
        $this->archiverFacture = $archiverFacture;
        return $this;
    }
}
