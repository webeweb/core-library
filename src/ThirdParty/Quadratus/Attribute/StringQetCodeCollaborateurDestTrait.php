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
 * Qet code collaborateur dest trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQetCodeCollaborateurDestTrait {

    /**
     * Qet code collaborateur dest.
     *
     * @var string
     */
    private $qetCodeCollaborateurDest;

    /**
     * Get the qet code collaborateur dest.
     *
     * @return string Returns the qet code collaborateur dest.
     */
    public function getQetCodeCollaborateurDest() {
        return $this->qetCodeCollaborateurDest;
    }

    /**
     * Set the qet code collaborateur dest.
     *
     * @param string $qetCodeCollaborateurDest The qet code collaborateur dest.
     */
    public function setQetCodeCollaborateurDest($qetCodeCollaborateurDest) {
        $this->qetCodeCollaborateurDest = $qetCodeCollaborateurDest;
        return $this;
    }
}
