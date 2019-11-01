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
 * Pdf bt reprendre libelle date trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtReprendreLibelleDateTrait {

    /**
     * Pdf bt reprendre libelle date.
     *
     * @var bool
     */
    private $pdfBtReprendreLibelleDate;

    /**
     * Get the pdf bt reprendre libelle date.
     *
     * @return bool Returns the pdf bt reprendre libelle date.
     */
    public function getPdfBtReprendreLibelleDate() {
        return $this->pdfBtReprendreLibelleDate;
    }

    /**
     * Set the pdf bt reprendre libelle date.
     *
     * @param bool $pdfBtReprendreLibelleDate The pdf bt reprendre libelle date.
     */
    public function setPdfBtReprendreLibelleDate($pdfBtReprendreLibelleDate) {
        $this->pdfBtReprendreLibelleDate = $pdfBtReprendreLibelleDate;
        return $this;
    }
}
