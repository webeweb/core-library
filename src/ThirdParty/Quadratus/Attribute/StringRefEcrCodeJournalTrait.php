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
 * Ref ecr code journal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefEcrCodeJournalTrait {

    /**
     * Ref ecr code journal.
     *
     * @var string
     */
    private $refEcrCodeJournal;

    /**
     * Get the ref ecr code journal.
     *
     * @return string Returns the ref ecr code journal.
     */
    public function getRefEcrCodeJournal() {
        return $this->refEcrCodeJournal;
    }

    /**
     * Set the ref ecr code journal.
     *
     * @param string $refEcrCodeJournal The ref ecr code journal.
     */
    public function setRefEcrCodeJournal($refEcrCodeJournal) {
        $this->refEcrCodeJournal = $refEcrCodeJournal;
        return $this;
    }
}
