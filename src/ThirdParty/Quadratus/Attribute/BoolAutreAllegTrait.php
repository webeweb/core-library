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
 * Autre alleg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutreAllegTrait {

    /**
     * Autre alleg.
     *
     * @var bool
     */
    private $autreAlleg;

    /**
     * Get the autre alleg.
     *
     * @return bool Returns the autre alleg.
     */
    public function getAutreAlleg() {
        return $this->autreAlleg;
    }

    /**
     * Set the autre alleg.
     *
     * @param bool $autreAlleg The autre alleg.
     */
    public function setAutreAlleg($autreAlleg) {
        $this->autreAlleg = $autreAlleg;
        return $this;
    }
}
