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
 * Code depot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDepotTrait {

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Get the code depot.
     *
     * @return string Returns the code depot.
     */
    public function getCodeDepot() {
        return $this->codeDepot;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }
}
