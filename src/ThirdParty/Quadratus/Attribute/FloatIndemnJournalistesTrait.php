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
 * Indemn journalistes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnJournalistesTrait {

    /**
     * Indemn journalistes.
     *
     * @var float
     */
    private $indemnJournalistes;

    /**
     * Get the indemn journalistes.
     *
     * @return float Returns the indemn journalistes.
     */
    public function getIndemnJournalistes() {
        return $this->indemnJournalistes;
    }

    /**
     * Set the indemn journalistes.
     *
     * @param float $indemnJournalistes The indemn journalistes.
     */
    public function setIndemnJournalistes($indemnJournalistes) {
        $this->indemnJournalistes = $indemnJournalistes;
        return $this;
    }
}
