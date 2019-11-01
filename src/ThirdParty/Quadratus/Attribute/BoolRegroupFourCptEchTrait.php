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
 * Regroup four cpt ech trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegroupFourCptEchTrait {

    /**
     * Regroup four cpt ech.
     *
     * @var bool
     */
    private $regroupFourCptEch;

    /**
     * Get the regroup four cpt ech.
     *
     * @return bool Returns the regroup four cpt ech.
     */
    public function getRegroupFourCptEch() {
        return $this->regroupFourCptEch;
    }

    /**
     * Set the regroup four cpt ech.
     *
     * @param bool $regroupFourCptEch The regroup four cpt ech.
     */
    public function setRegroupFourCptEch($regroupFourCptEch) {
        $this->regroupFourCptEch = $regroupFourCptEch;
        return $this;
    }
}
