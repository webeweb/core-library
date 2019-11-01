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
 * Restr cli fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliFinTrait {

    /**
     * Restr cli fin.
     *
     * @var string
     */
    private $restrCliFin;

    /**
     * Get the restr cli fin.
     *
     * @return string Returns the restr cli fin.
     */
    public function getRestrCliFin() {
        return $this->restrCliFin;
    }

    /**
     * Set the restr cli fin.
     *
     * @param string $restrCliFin The restr cli fin.
     */
    public function setRestrCliFin($restrCliFin) {
        $this->restrCliFin = $restrCliFin;
        return $this;
    }
}
