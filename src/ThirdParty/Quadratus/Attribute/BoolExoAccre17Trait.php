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
 * Exo accre17 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoAccre17Trait {

    /**
     * Exo accre17.
     *
     * @var bool
     */
    private $exoAccre17;

    /**
     * Get the exo accre17.
     *
     * @return bool Returns the exo accre17.
     */
    public function getExoAccre17() {
        return $this->exoAccre17;
    }

    /**
     * Set the exo accre17.
     *
     * @param bool $exoAccre17 The exo accre17.
     */
    public function setExoAccre17($exoAccre17) {
        $this->exoAccre17 = $exoAccre17;
        return $this;
    }
}
