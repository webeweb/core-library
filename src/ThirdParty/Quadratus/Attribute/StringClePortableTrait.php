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
 * Cle portable trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClePortableTrait {

    /**
     * Cle portable.
     *
     * @var string
     */
    private $clePortable;

    /**
     * Get the cle portable.
     *
     * @return string Returns the cle portable.
     */
    public function getClePortable() {
        return $this->clePortable;
    }

    /**
     * Set the cle portable.
     *
     * @param string $clePortable The cle portable.
     */
    public function setClePortable($clePortable) {
        $this->clePortable = $clePortable;
        return $this;
    }
}
