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
 * Opca dif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOpcaDifTrait {

    /**
     * Opca dif.
     *
     * @var string
     */
    private $opcaDif;

    /**
     * Get the opca dif.
     *
     * @return string Returns the opca dif.
     */
    public function getOpcaDif() {
        return $this->opcaDif;
    }

    /**
     * Set the opca dif.
     *
     * @param string $opcaDif The opca dif.
     */
    public function setOpcaDif($opcaDif) {
        $this->opcaDif = $opcaDif;
        return $this;
    }
}
