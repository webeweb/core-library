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
 * Code journal revision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeJournalRevisionTrait {

    /**
     * Code journal revision.
     *
     * @var string
     */
    private $codeJournalRevision;

    /**
     * Get the code journal revision.
     *
     * @return string Returns the code journal revision.
     */
    public function getCodeJournalRevision() {
        return $this->codeJournalRevision;
    }

    /**
     * Set the code journal revision.
     *
     * @param string $codeJournalRevision The code journal revision.
     */
    public function setCodeJournalRevision($codeJournalRevision) {
        $this->codeJournalRevision = $codeJournalRevision;
        return $this;
    }
}
