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
 * Detail cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailClotureTrait {

    /**
     * Detail cloture.
     *
     * @var bool
     */
    private $detailCloture;

    /**
     * Get the detail cloture.
     *
     * @return bool Returns the detail cloture.
     */
    public function getDetailCloture() {
        return $this->detailCloture;
    }

    /**
     * Set the detail cloture.
     *
     * @param bool $detailCloture The detail cloture.
     */
    public function setDetailCloture($detailCloture) {
        $this->detailCloture = $detailCloture;
        return $this;
    }
}
