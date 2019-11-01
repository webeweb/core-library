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
 * Etat revision trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatRevisionTrait {

    /**
     * Etat revision.
     *
     * @var string
     */
    private $etatRevision;

    /**
     * Get the etat revision.
     *
     * @return string Returns the etat revision.
     */
    public function getEtatRevision() {
        return $this->etatRevision;
    }

    /**
     * Set the etat revision.
     *
     * @param string $etatRevision The etat revision.
     */
    public function setEtatRevision($etatRevision) {
        $this->etatRevision = $etatRevision;
        return $this;
    }
}
