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
 * Num ecr eco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumEcrEcoTrait {

    /**
     * Num ecr eco.
     *
     * @var int
     */
    private $numEcrEco;

    /**
     * Get the num ecr eco.
     *
     * @return int Returns the num ecr eco.
     */
    public function getNumEcrEco() {
        return $this->numEcrEco;
    }

    /**
     * Set the num ecr eco.
     *
     * @param int $numEcrEco The num ecr eco.
     */
    public function setNumEcrEco($numEcrEco) {
        $this->numEcrEco = $numEcrEco;
        return $this;
    }
}
