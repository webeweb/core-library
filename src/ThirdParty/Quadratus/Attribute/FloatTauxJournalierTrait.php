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
 * Taux journalier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxJournalierTrait {

    /**
     * Taux journalier.
     *
     * @var float
     */
    private $tauxJournalier;

    /**
     * Get the taux journalier.
     *
     * @return float Returns the taux journalier.
     */
    public function getTauxJournalier() {
        return $this->tauxJournalier;
    }

    /**
     * Set the taux journalier.
     *
     * @param float $tauxJournalier The taux journalier.
     */
    public function setTauxJournalier($tauxJournalier) {
        $this->tauxJournalier = $tauxJournalier;
        return $this;
    }
}
