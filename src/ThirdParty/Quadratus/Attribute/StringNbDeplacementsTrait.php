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
 * Nb deplacements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDeplacementsTrait {

    /**
     * Nb deplacements.
     *
     * @var string
     */
    private $nbDeplacements;

    /**
     * Get the nb deplacements.
     *
     * @return string Returns the nb deplacements.
     */
    public function getNbDeplacements() {
        return $this->nbDeplacements;
    }

    /**
     * Set the nb deplacements.
     *
     * @param string $nbDeplacements The nb deplacements.
     */
    public function setNbDeplacements($nbDeplacements) {
        $this->nbDeplacements = $nbDeplacements;
        return $this;
    }
}
