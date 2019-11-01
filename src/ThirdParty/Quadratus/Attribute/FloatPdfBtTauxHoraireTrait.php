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
 * Pdf bt taux horaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPdfBtTauxHoraireTrait {

    /**
     * Pdf bt taux horaire.
     *
     * @var float
     */
    private $pdfBtTauxHoraire;

    /**
     * Get the pdf bt taux horaire.
     *
     * @return float Returns the pdf bt taux horaire.
     */
    public function getPdfBtTauxHoraire() {
        return $this->pdfBtTauxHoraire;
    }

    /**
     * Set the pdf bt taux horaire.
     *
     * @param float $pdfBtTauxHoraire The pdf bt taux horaire.
     */
    public function setPdfBtTauxHoraire($pdfBtTauxHoraire) {
        $this->pdfBtTauxHoraire = $pdfBtTauxHoraire;
        return $this;
    }
}
