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
 * Controle exist ecr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringControleExistEcrTrait {

    /**
     * Controle exist ecr.
     *
     * @var string
     */
    private $controleExistEcr;

    /**
     * Get the controle exist ecr.
     *
     * @return string Returns the controle exist ecr.
     */
    public function getControleExistEcr() {
        return $this->controleExistEcr;
    }

    /**
     * Set the controle exist ecr.
     *
     * @param string $controleExistEcr The controle exist ecr.
     */
    public function setControleExistEcr($controleExistEcr) {
        $this->controleExistEcr = $controleExistEcr;
        return $this;
    }
}
