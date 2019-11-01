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
 * Code client livr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeClientLivrTrait {

    /**
     * Code client livr.
     *
     * @var string
     */
    private $codeClientLivr;

    /**
     * Get the code client livr.
     *
     * @return string Returns the code client livr.
     */
    public function getCodeClientLivr() {
        return $this->codeClientLivr;
    }

    /**
     * Set the code client livr.
     *
     * @param string $codeClientLivr The code client livr.
     */
    public function setCodeClientLivr($codeClientLivr) {
        $this->codeClientLivr = $codeClientLivr;
        return $this;
    }
}
