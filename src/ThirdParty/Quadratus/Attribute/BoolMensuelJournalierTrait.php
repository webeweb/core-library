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
 * Mensuel journalier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMensuelJournalierTrait {

    /**
     * Mensuel journalier.
     *
     * @var bool
     */
    private $mensuelJournalier;

    /**
     * Get the mensuel journalier.
     *
     * @return bool Returns the mensuel journalier.
     */
    public function getMensuelJournalier() {
        return $this->mensuelJournalier;
    }

    /**
     * Set the mensuel journalier.
     *
     * @param bool $mensuelJournalier The mensuel journalier.
     */
    public function setMensuelJournalier($mensuelJournalier) {
        $this->mensuelJournalier = $mensuelJournalier;
        return $this;
    }
}
