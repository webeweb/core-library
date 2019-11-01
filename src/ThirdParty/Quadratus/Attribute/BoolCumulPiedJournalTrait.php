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
 * Cumul pied journal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCumulPiedJournalTrait {

    /**
     * Cumul pied journal.
     *
     * @var bool
     */
    private $cumulPiedJournal;

    /**
     * Get the cumul pied journal.
     *
     * @return bool Returns the cumul pied journal.
     */
    public function getCumulPiedJournal() {
        return $this->cumulPiedJournal;
    }

    /**
     * Set the cumul pied journal.
     *
     * @param bool $cumulPiedJournal The cumul pied journal.
     */
    public function setCumulPiedJournal($cumulPiedJournal) {
        $this->cumulPiedJournal = $cumulPiedJournal;
        return $this;
    }
}
