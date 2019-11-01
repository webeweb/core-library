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
 * Cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolClotureTrait {

    /**
     * Cloture.
     *
     * @var bool
     */
    private $cloture;

    /**
     * Get the cloture.
     *
     * @return bool Returns the cloture.
     */
    public function getCloture() {
        return $this->cloture;
    }

    /**
     * Set the cloture.
     *
     * @param bool $cloture The cloture.
     */
    public function setCloture($cloture) {
        $this->cloture = $cloture;
        return $this;
    }
}
