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
 * Etat das trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatDasTrait {

    /**
     * Etat das.
     *
     * @var string
     */
    private $etatDas;

    /**
     * Get the etat das.
     *
     * @return string Returns the etat das.
     */
    public function getEtatDas() {
        return $this->etatDas;
    }

    /**
     * Set the etat das.
     *
     * @param string $etatDas The etat das.
     */
    public function setEtatDas($etatDas) {
        $this->etatDas = $etatDas;
        return $this;
    }
}
