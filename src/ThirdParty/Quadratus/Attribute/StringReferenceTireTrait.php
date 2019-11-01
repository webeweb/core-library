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
 * Reference tire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReferenceTireTrait {

    /**
     * Reference tire.
     *
     * @var string
     */
    private $referenceTire;

    /**
     * Get the reference tire.
     *
     * @return string Returns the reference tire.
     */
    public function getReferenceTire() {
        return $this->referenceTire;
    }

    /**
     * Set the reference tire.
     *
     * @param string $referenceTire The reference tire.
     */
    public function setReferenceTire($referenceTire) {
        $this->referenceTire = $referenceTire;
        return $this;
    }
}
