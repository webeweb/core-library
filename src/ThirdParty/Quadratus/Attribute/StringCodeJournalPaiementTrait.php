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
 * Code journal paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJournalPaiementTrait {

    /**
     * Code journal paiement.
     *
     * @var string
     */
    private $codeJournalPaiement;

    /**
     * Get the code journal paiement.
     *
     * @return string Returns the code journal paiement.
     */
    public function getCodeJournalPaiement() {
        return $this->codeJournalPaiement;
    }

    /**
     * Set the code journal paiement.
     *
     * @param string $codeJournalPaiement The code journal paiement.
     */
    public function setCodeJournalPaiement($codeJournalPaiement) {
        $this->codeJournalPaiement = $codeJournalPaiement;
        return $this;
    }
}
