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
 * Pas modif rib regl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasModifRibReglTrait {

    /**
     * Pas modif rib regl.
     *
     * @var bool
     */
    private $pasModifRibRegl;

    /**
     * Get the pas modif rib regl.
     *
     * @return bool Returns the pas modif rib regl.
     */
    public function getPasModifRibRegl() {
        return $this->pasModifRibRegl;
    }

    /**
     * Set the pas modif rib regl.
     *
     * @param bool $pasModifRibRegl The pas modif rib regl.
     */
    public function setPasModifRibRegl($pasModifRibRegl) {
        $this->pasModifRibRegl = $pasModifRibRegl;
        return $this;
    }
}
