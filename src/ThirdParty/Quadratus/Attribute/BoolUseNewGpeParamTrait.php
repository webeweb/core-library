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
 * Use new gpe param trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUseNewGpeParamTrait {

    /**
     * Use new gpe param.
     *
     * @var bool
     */
    private $useNewGpeParam;

    /**
     * Get the use new gpe param.
     *
     * @return bool Returns the use new gpe param.
     */
    public function getUseNewGpeParam() {
        return $this->useNewGpeParam;
    }

    /**
     * Set the use new gpe param.
     *
     * @param bool $useNewGpeParam The use new gpe param.
     */
    public function setUseNewGpeParam($useNewGpeParam) {
        $this->useNewGpeParam = $useNewGpeParam;
        return $this;
    }
}
