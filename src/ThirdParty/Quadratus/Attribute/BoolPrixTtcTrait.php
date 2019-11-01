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
 * Prix ttc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrixTtcTrait {

    /**
     * Prix ttc.
     *
     * @var bool
     */
    private $prixTtc;

    /**
     * Get the prix ttc.
     *
     * @return bool Returns the prix ttc.
     */
    public function getPrixTtc() {
        return $this->prixTtc;
    }

    /**
     * Set the prix ttc.
     *
     * @param bool $prixTtc The prix ttc.
     */
    public function setPrixTtc($prixTtc) {
        $this->prixTtc = $prixTtc;
        return $this;
    }
}
