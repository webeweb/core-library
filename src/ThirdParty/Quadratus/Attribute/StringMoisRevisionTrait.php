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
 * Mois revision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisRevisionTrait {

    /**
     * Mois revision.
     *
     * @var string
     */
    private $moisRevision;

    /**
     * Get the mois revision.
     *
     * @return string Returns the mois revision.
     */
    public function getMoisRevision() {
        return $this->moisRevision;
    }

    /**
     * Set the mois revision.
     *
     * @param string $moisRevision The mois revision.
     */
    public function setMoisRevision($moisRevision) {
        $this->moisRevision = $moisRevision;
        return $this;
    }
}
