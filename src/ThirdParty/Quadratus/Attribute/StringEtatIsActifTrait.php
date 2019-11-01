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
 * Etat is actif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatIsActifTrait {

    /**
     * Etat is actif.
     *
     * @var string
     */
    private $etatIsActif;

    /**
     * Get the etat is actif.
     *
     * @return string Returns the etat is actif.
     */
    public function getEtatIsActif() {
        return $this->etatIsActif;
    }

    /**
     * Set the etat is actif.
     *
     * @param string $etatIsActif The etat is actif.
     */
    public function setEtatIsActif($etatIsActif) {
        $this->etatIsActif = $etatIsActif;
        return $this;
    }
}
