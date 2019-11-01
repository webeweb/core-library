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
 * Diff lettrage code journal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDiffLettrageCodeJournalTrait {

    /**
     * Diff lettrage code journal.
     *
     * @var string
     */
    private $diffLettrageCodeJournal;

    /**
     * Get the diff lettrage code journal.
     *
     * @return string Returns the diff lettrage code journal.
     */
    public function getDiffLettrageCodeJournal() {
        return $this->diffLettrageCodeJournal;
    }

    /**
     * Set the diff lettrage code journal.
     *
     * @param string $diffLettrageCodeJournal The diff lettrage code journal.
     */
    public function setDiffLettrageCodeJournal($diffLettrageCodeJournal) {
        $this->diffLettrageCodeJournal = $diffLettrageCodeJournal;
        return $this;
    }
}
