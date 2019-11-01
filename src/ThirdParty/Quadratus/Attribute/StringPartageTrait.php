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
 * Partage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPartageTrait {

    /**
     * Partage.
     *
     * @var string
     */
    private $partage;

    /**
     * Get the partage.
     *
     * @return string Returns the partage.
     */
    public function getPartage() {
        return $this->partage;
    }

    /**
     * Set the partage.
     *
     * @param string $partage The partage.
     */
    public function setPartage($partage) {
        $this->partage = $partage;
        return $this;
    }
}
