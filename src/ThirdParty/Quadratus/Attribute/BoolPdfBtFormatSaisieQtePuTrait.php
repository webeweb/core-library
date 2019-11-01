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
 * Pdf bt format saisie qte pu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtFormatSaisieQtePuTrait {

    /**
     * Pdf bt format saisie qte pu.
     *
     * @var bool
     */
    private $pdfBtFormatSaisieQtePu;

    /**
     * Get the pdf bt format saisie qte pu.
     *
     * @return bool Returns the pdf bt format saisie qte pu.
     */
    public function getPdfBtFormatSaisieQtePu() {
        return $this->pdfBtFormatSaisieQtePu;
    }

    /**
     * Set the pdf bt format saisie qte pu.
     *
     * @param bool $pdfBtFormatSaisieQtePu The pdf bt format saisie qte pu.
     */
    public function setPdfBtFormatSaisieQtePu($pdfBtFormatSaisieQtePu) {
        $this->pdfBtFormatSaisieQtePu = $pdfBtFormatSaisieQtePu;
        return $this;
    }
}
