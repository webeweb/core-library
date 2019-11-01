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
 * Restr cli autre2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRestrCliAutre2Trait {

    /**
     * Restr cli autre2.
     *
     * @var string
     */
    private $restrCliAutre2;

    /**
     * Get the restr cli autre2.
     *
     * @return string Returns the restr cli autre2.
     */
    public function getRestrCliAutre2() {
        return $this->restrCliAutre2;
    }

    /**
     * Set the restr cli autre2.
     *
     * @param string $restrCliAutre2 The restr cli autre2.
     */
    public function setRestrCliAutre2($restrCliAutre2) {
        $this->restrCliAutre2 = $restrCliAutre2;
        return $this;
    }
}
