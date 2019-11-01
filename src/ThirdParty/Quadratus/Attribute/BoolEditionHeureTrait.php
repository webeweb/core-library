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
 * Edition heure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditionHeureTrait {

    /**
     * Edition heure.
     *
     * @var bool
     */
    private $editionHeure;

    /**
     * Get the edition heure.
     *
     * @return bool Returns the edition heure.
     */
    public function getEditionHeure() {
        return $this->editionHeure;
    }

    /**
     * Set the edition heure.
     *
     * @param bool $editionHeure The edition heure.
     */
    public function setEditionHeure($editionHeure) {
        $this->editionHeure = $editionHeure;
        return $this;
    }
}
