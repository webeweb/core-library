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
 * Type bt saisi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBtSaisiTrait {

    /**
     * Type bt saisi.
     *
     * @var string
     */
    private $typeBtSaisi;

    /**
     * Get the type bt saisi.
     *
     * @return string Returns the type bt saisi.
     */
    public function getTypeBtSaisi() {
        return $this->typeBtSaisi;
    }

    /**
     * Set the type bt saisi.
     *
     * @param string $typeBtSaisi The type bt saisi.
     */
    public function setTypeBtSaisi($typeBtSaisi) {
        $this->typeBtSaisi = $typeBtSaisi;
        return $this;
    }
}
