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
 * Is tache tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIsTacheTpTrait {

    /**
     * Is tache tp.
     *
     * @var int
     */
    private $isTacheTp;

    /**
     * Get the is tache tp.
     *
     * @return int Returns the is tache tp.
     */
    public function getIsTacheTp() {
        return $this->isTacheTp;
    }

    /**
     * Set the is tache tp.
     *
     * @param int $isTacheTp The is tache tp.
     */
    public function setIsTacheTp($isTacheTp) {
        $this->isTacheTp = $isTacheTp;
        return $this;
    }
}
