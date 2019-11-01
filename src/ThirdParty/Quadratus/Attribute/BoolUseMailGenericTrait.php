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
 * Use mail generic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUseMailGenericTrait {

    /**
     * Use mail generic.
     *
     * @var bool
     */
    private $useMailGeneric;

    /**
     * Get the use mail generic.
     *
     * @return bool Returns the use mail generic.
     */
    public function getUseMailGeneric() {
        return $this->useMailGeneric;
    }

    /**
     * Set the use mail generic.
     *
     * @param bool $useMailGeneric The use mail generic.
     */
    public function setUseMailGeneric($useMailGeneric) {
        $this->useMailGeneric = $useMailGeneric;
        return $this;
    }
}
