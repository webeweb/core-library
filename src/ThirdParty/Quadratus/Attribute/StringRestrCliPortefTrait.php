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
 * Restr cli portef trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliPortefTrait {

    /**
     * Restr cli portef.
     *
     * @var string
     */
    private $restrCliPortef;

    /**
     * Get the restr cli portef.
     *
     * @return string Returns the restr cli portef.
     */
    public function getRestrCliPortef() {
        return $this->restrCliPortef;
    }

    /**
     * Set the restr cli portef.
     *
     * @param string $restrCliPortef The restr cli portef.
     */
    public function setRestrCliPortef($restrCliPortef) {
        $this->restrCliPortef = $restrCliPortef;
        return $this;
    }
}
