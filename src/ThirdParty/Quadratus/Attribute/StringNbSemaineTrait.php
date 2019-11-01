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
 * Nb semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbSemaineTrait {

    /**
     * Nb semaine.
     *
     * @var string
     */
    private $nbSemaine;

    /**
     * Get the nb semaine.
     *
     * @return string Returns the nb semaine.
     */
    public function getNbSemaine() {
        return $this->nbSemaine;
    }

    /**
     * Set the nb semaine.
     *
     * @param string $nbSemaine The nb semaine.
     */
    public function setNbSemaine($nbSemaine) {
        $this->nbSemaine = $nbSemaine;
        return $this;
    }
}
