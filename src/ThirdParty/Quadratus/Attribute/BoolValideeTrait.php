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
 * Validee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolValideeTrait {

    /**
     * Validee.
     *
     * @var bool
     */
    private $validee;

    /**
     * Get the validee.
     *
     * @return bool Returns the validee.
     */
    public function getValidee() {
        return $this->validee;
    }

    /**
     * Set the validee.
     *
     * @param bool $validee The validee.
     */
    public function setValidee($validee) {
        $this->validee = $validee;
        return $this;
    }
}
