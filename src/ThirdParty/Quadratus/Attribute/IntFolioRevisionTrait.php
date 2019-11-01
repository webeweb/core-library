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
 * Folio revision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFolioRevisionTrait {

    /**
     * Folio revision.
     *
     * @var int
     */
    private $folioRevision;

    /**
     * Get the folio revision.
     *
     * @return int Returns the folio revision.
     */
    public function getFolioRevision() {
        return $this->folioRevision;
    }

    /**
     * Set the folio revision.
     *
     * @param int $folioRevision The folio revision.
     */
    public function setFolioRevision($folioRevision) {
        $this->folioRevision = $folioRevision;
        return $this;
    }
}
