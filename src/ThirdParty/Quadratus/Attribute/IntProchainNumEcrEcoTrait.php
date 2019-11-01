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
 * Prochain num ecr eco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntProchainNumEcrEcoTrait {

    /**
     * Prochain num ecr eco.
     *
     * @var int
     */
    private $prochainNumEcrEco;

    /**
     * Get the prochain num ecr eco.
     *
     * @return int Returns the prochain num ecr eco.
     */
    public function getProchainNumEcrEco() {
        return $this->prochainNumEcrEco;
    }

    /**
     * Set the prochain num ecr eco.
     *
     * @param int $prochainNumEcrEco The prochain num ecr eco.
     */
    public function setProchainNumEcrEco($prochainNumEcrEco) {
        $this->prochainNumEcrEco = $prochainNumEcrEco;
        return $this;
    }
}
