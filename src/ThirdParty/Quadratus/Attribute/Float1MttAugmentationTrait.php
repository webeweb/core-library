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
 * 1 mtt augmentation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait Float1MttAugmentationTrait {

    /**
     * 1 mtt augmentation.
     *
     * @var float
     */
    private $_1MttAugmentation;

    /**
     * Get the 1 mtt augmentation.
     *
     * @return float Returns the 1 mtt augmentation.
     */
    public function get1MttAugmentation() {
        return $this->_1MttAugmentation;
    }

    /**
     * Set the 1 mtt augmentation.
     *
     * @param float $_1MttAugmentation The 1 mtt augmentation.
     */
    public function set1MttAugmentation($_1MttAugmentation) {
        $this->_1MttAugmentation = $_1MttAugmentation;
        return $this;
    }
}
