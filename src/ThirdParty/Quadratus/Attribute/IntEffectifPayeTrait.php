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
 * Effectif paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEffectifPayeTrait {

    /**
     * Effectif paye.
     *
     * @var int
     */
    private $effectifPaye;

    /**
     * Get the effectif paye.
     *
     * @return int Returns the effectif paye.
     */
    public function getEffectifPaye() {
        return $this->effectifPaye;
    }

    /**
     * Set the effectif paye.
     *
     * @param int $effectifPaye The effectif paye.
     */
    public function setEffectifPaye($effectifPaye) {
        $this->effectifPaye = $effectifPaye;
        return $this;
    }
}
