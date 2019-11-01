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
 * Ech detail aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEchDetailAffTrait {

    /**
     * Ech detail aff.
     *
     * @var bool
     */
    private $echDetailAff;

    /**
     * Get the ech detail aff.
     *
     * @return bool Returns the ech detail aff.
     */
    public function getEchDetailAff() {
        return $this->echDetailAff;
    }

    /**
     * Set the ech detail aff.
     *
     * @param bool $echDetailAff The ech detail aff.
     */
    public function setEchDetailAff($echDetailAff) {
        $this->echDetailAff = $echDetailAff;
        return $this;
    }
}
