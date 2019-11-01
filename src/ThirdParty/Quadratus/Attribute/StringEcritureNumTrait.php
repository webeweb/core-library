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
 * Ecriture num trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEcritureNumTrait {

    /**
     * Ecriture num.
     *
     * @var string
     */
    private $ecritureNum;

    /**
     * Get the ecriture num.
     *
     * @return string Returns the ecriture num.
     */
    public function getEcritureNum() {
        return $this->ecritureNum;
    }

    /**
     * Set the ecriture num.
     *
     * @param string $ecritureNum The ecriture num.
     */
    public function setEcritureNum($ecritureNum) {
        $this->ecritureNum = $ecritureNum;
        return $this;
    }
}
