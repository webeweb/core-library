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
 * Bloc fc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBlocFcTrait {

    /**
     * Bloc fc.
     *
     * @var bool
     */
    private $blocFc;

    /**
     * Get the bloc fc.
     *
     * @return bool Returns the bloc fc.
     */
    public function getBlocFc() {
        return $this->blocFc;
    }

    /**
     * Set the bloc fc.
     *
     * @param bool $blocFc The bloc fc.
     */
    public function setBlocFc($blocFc) {
        $this->blocFc = $blocFc;
        return $this;
    }
}
