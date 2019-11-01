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
 * Code epoux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEpouxTrait {

    /**
     * Code epoux.
     *
     * @var string
     */
    private $codeEpoux;

    /**
     * Get the code epoux.
     *
     * @return string Returns the code epoux.
     */
    public function getCodeEpoux() {
        return $this->codeEpoux;
    }

    /**
     * Set the code epoux.
     *
     * @param string $codeEpoux The code epoux.
     */
    public function setCodeEpoux($codeEpoux) {
        $this->codeEpoux = $codeEpoux;
        return $this;
    }
}
