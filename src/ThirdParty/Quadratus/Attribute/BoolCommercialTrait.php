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
 * Commercial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCommercialTrait {

    /**
     * Commercial.
     *
     * @var bool
     */
    private $commercial;

    /**
     * Get the commercial.
     *
     * @return bool Returns the commercial.
     */
    public function getCommercial() {
        return $this->commercial;
    }

    /**
     * Set the commercial.
     *
     * @param bool $commercial The commercial.
     */
    public function setCommercial($commercial) {
        $this->commercial = $commercial;
        return $this;
    }
}
