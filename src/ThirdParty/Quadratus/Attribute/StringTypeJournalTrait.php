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
 * Type journal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeJournalTrait {

    /**
     * Type journal.
     *
     * @var string
     */
    private $typeJournal;

    /**
     * Get the type journal.
     *
     * @return string Returns the type journal.
     */
    public function getTypeJournal() {
        return $this->typeJournal;
    }

    /**
     * Set the type journal.
     *
     * @param string $typeJournal The type journal.
     */
    public function setTypeJournal($typeJournal) {
        $this->typeJournal = $typeJournal;
        return $this;
    }
}
