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
 * Raz h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRazHSupTrait {

    /**
     * Raz h sup.
     *
     * @var string
     */
    private $razHSup;

    /**
     * Get the raz h sup.
     *
     * @return string Returns the raz h sup.
     */
    public function getRazHSup() {
        return $this->razHSup;
    }

    /**
     * Set the raz h sup.
     *
     * @param string $razHSup The raz h sup.
     */
    public function setRazHSup($razHSup) {
        $this->razHSup = $razHSup;
        return $this;
    }
}
