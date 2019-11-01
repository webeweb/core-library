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
 * Q pub web code collaborateur dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQPubWebCodeCollaborateurDestTrait {

    /**
     * Q pub web code collaborateur dest.
     *
     * @var string
     */
    private $qPubWebCodeCollaborateurDest;

    /**
     * Get the q pub web code collaborateur dest.
     *
     * @return string Returns the q pub web code collaborateur dest.
     */
    public function getQPubWebCodeCollaborateurDest() {
        return $this->qPubWebCodeCollaborateurDest;
    }

    /**
     * Set the q pub web code collaborateur dest.
     *
     * @param string $qPubWebCodeCollaborateurDest The q pub web code collaborateur dest.
     */
    public function setQPubWebCodeCollaborateurDest($qPubWebCodeCollaborateurDest) {
        $this->qPubWebCodeCollaborateurDest = $qPubWebCodeCollaborateurDest;
        return $this;
    }
}
