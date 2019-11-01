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
 * Qualite nb notes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualiteNbNotesTrait {

    /**
     * Qualite nb notes.
     *
     * @var string
     */
    private $qualiteNbNotes;

    /**
     * Get the qualite nb notes.
     *
     * @return string Returns the qualite nb notes.
     */
    public function getQualiteNbNotes() {
        return $this->qualiteNbNotes;
    }

    /**
     * Set the qualite nb notes.
     *
     * @param string $qualiteNbNotes The qualite nb notes.
     */
    public function setQualiteNbNotes($qualiteNbNotes) {
        $this->qualiteNbNotes = $qualiteNbNotes;
        return $this;
    }
}
