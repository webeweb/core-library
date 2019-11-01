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
 * Etat cpt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatCptTrait {

    /**
     * Etat cpt.
     *
     * @var string
     */
    private $etatCpt;

    /**
     * Get the etat cpt.
     *
     * @return string Returns the etat cpt.
     */
    public function getEtatCpt() {
        return $this->etatCpt;
    }

    /**
     * Set the etat cpt.
     *
     * @param string $etatCpt The etat cpt.
     */
    public function setEtatCpt($etatCpt) {
        $this->etatCpt = $etatCpt;
        return $this;
    }
}
