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
 * Etat cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatCpTrait {

    /**
     * Etat cp.
     *
     * @var string
     */
    private $etatCp;

    /**
     * Get the etat cp.
     *
     * @return string Returns the etat cp.
     */
    public function getEtatCp() {
        return $this->etatCp;
    }

    /**
     * Set the etat cp.
     *
     * @param string $etatCp The etat cp.
     */
    public function setEtatCp($etatCp) {
        $this->etatCp = $etatCp;
        return $this;
    }
}
