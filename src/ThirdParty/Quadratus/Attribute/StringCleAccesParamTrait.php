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
 * Cle acces param trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesParamTrait {

    /**
     * Cle acces param.
     *
     * @var string
     */
    private $cleAccesParam;

    /**
     * Get the cle acces param.
     *
     * @return string Returns the cle acces param.
     */
    public function getCleAccesParam() {
        return $this->cleAccesParam;
    }

    /**
     * Set the cle acces param.
     *
     * @param string $cleAccesParam The cle acces param.
     */
    public function setCleAccesParam($cleAccesParam) {
        $this->cleAccesParam = $cleAccesParam;
        return $this;
    }
}
