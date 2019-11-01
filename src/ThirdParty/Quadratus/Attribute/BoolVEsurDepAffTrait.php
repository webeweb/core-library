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
 * V esur dep aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVEsurDepAffTrait {

    /**
     * V esur dep aff.
     *
     * @var bool
     */
    private $vEsurDepAff;

    /**
     * Get the v esur dep aff.
     *
     * @return bool Returns the v esur dep aff.
     */
    public function getVEsurDepAff() {
        return $this->vEsurDepAff;
    }

    /**
     * Set the v esur dep aff.
     *
     * @param bool $vEsurDepAff The v esur dep aff.
     */
    public function setVEsurDepAff($vEsurDepAff) {
        $this->vEsurDepAff = $vEsurDepAff;
        return $this;
    }
}
