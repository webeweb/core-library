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
 * Nb m ajout per trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbMAjoutPerTrait {

    /**
     * Nb m ajout per.
     *
     * @var string
     */
    private $nbMAjoutPer;

    /**
     * Get the nb m ajout per.
     *
     * @return string Returns the nb m ajout per.
     */
    public function getNbMAjoutPer() {
        return $this->nbMAjoutPer;
    }

    /**
     * Set the nb m ajout per.
     *
     * @param string $nbMAjoutPer The nb m ajout per.
     */
    public function setNbMAjoutPer($nbMAjoutPer) {
        $this->nbMAjoutPer = $nbMAjoutPer;
        return $this;
    }
}
