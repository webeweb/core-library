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
 * Etat visite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatVisiteTrait {

    /**
     * Etat visite.
     *
     * @var string
     */
    private $etatVisite;

    /**
     * Get the etat visite.
     *
     * @return string Returns the etat visite.
     */
    public function getEtatVisite() {
        return $this->etatVisite;
    }

    /**
     * Set the etat visite.
     *
     * @param string $etatVisite The etat visite.
     */
    public function setEtatVisite($etatVisite) {
        $this->etatVisite = $etatVisite;
        return $this;
    }
}
