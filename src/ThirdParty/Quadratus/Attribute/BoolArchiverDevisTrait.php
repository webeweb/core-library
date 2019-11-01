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
 * Archiver devis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArchiverDevisTrait {

    /**
     * Archiver devis.
     *
     * @var bool
     */
    private $archiverDevis;

    /**
     * Get the archiver devis.
     *
     * @return bool Returns the archiver devis.
     */
    public function getArchiverDevis() {
        return $this->archiverDevis;
    }

    /**
     * Set the archiver devis.
     *
     * @param bool $archiverDevis The archiver devis.
     */
    public function setArchiverDevis($archiverDevis) {
        $this->archiverDevis = $archiverDevis;
        return $this;
    }
}
