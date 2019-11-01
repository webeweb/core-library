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
 * Regle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleTrait {

    /**
     * Regle.
     *
     * @var string
     */
    private $regle;

    /**
     * Get the regle.
     *
     * @return string Returns the regle.
     */
    public function getRegle() {
        return $this->regle;
    }

    /**
     * Set the regle.
     *
     * @param string $regle The regle.
     */
    public function setRegle($regle) {
        $this->regle = $regle;
        return $this;
    }
}
