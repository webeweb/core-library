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
 * Etat i paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatIPaieTrait {

    /**
     * Etat i paie.
     *
     * @var string
     */
    private $etatIPaie;

    /**
     * Get the etat i paie.
     *
     * @return string Returns the etat i paie.
     */
    public function getEtatIPaie() {
        return $this->etatIPaie;
    }

    /**
     * Set the etat i paie.
     *
     * @param string $etatIPaie The etat i paie.
     */
    public function setEtatIPaie($etatIPaie) {
        $this->etatIPaie = $etatIPaie;
        return $this;
    }
}
