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
 * V numero deux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntVNumeroDeuxTrait {

    /**
     * V numero deux.
     *
     * @var int
     */
    private $vNumeroDeux;

    /**
     * Get the v numero deux.
     *
     * @return int Returns the v numero deux.
     */
    public function getVNumeroDeux() {
        return $this->vNumeroDeux;
    }

    /**
     * Set the v numero deux.
     *
     * @param int $vNumeroDeux The v numero deux.
     */
    public function setVNumeroDeux($vNumeroDeux) {
        $this->vNumeroDeux = $vNumeroDeux;
        return $this;
    }
}
