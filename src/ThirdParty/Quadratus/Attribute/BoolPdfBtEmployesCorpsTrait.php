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
 * Pdf bt employes corps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPdfBtEmployesCorpsTrait {

    /**
     * Pdf bt employes corps.
     *
     * @var bool
     */
    private $pdfBtEmployesCorps;

    /**
     * Get the pdf bt employes corps.
     *
     * @return bool Returns the pdf bt employes corps.
     */
    public function getPdfBtEmployesCorps() {
        return $this->pdfBtEmployesCorps;
    }

    /**
     * Set the pdf bt employes corps.
     *
     * @param bool $pdfBtEmployesCorps The pdf bt employes corps.
     */
    public function setPdfBtEmployesCorps($pdfBtEmployesCorps) {
        $this->pdfBtEmployesCorps = $pdfBtEmployesCorps;
        return $this;
    }
}
