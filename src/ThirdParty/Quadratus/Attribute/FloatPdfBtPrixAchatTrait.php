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
 * Pdf bt prix achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPdfBtPrixAchatTrait {

    /**
     * Pdf bt prix achat.
     *
     * @var float
     */
    private $pdfBtPrixAchat;

    /**
     * Get the pdf bt prix achat.
     *
     * @return float Returns the pdf bt prix achat.
     */
    public function getPdfBtPrixAchat() {
        return $this->pdfBtPrixAchat;
    }

    /**
     * Set the pdf bt prix achat.
     *
     * @param float $pdfBtPrixAchat The pdf bt prix achat.
     */
    public function setPdfBtPrixAchat($pdfBtPrixAchat) {
        $this->pdfBtPrixAchat = $pdfBtPrixAchat;
        return $this;
    }
}
