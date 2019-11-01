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
 * Use corres sociale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolUseCorresSocialeTrait {

    /**
     * Use corres sociale.
     *
     * @var bool
     */
    private $useCorresSociale;

    /**
     * Get the use corres sociale.
     *
     * @return bool Returns the use corres sociale.
     */
    public function getUseCorresSociale() {
        return $this->useCorresSociale;
    }

    /**
     * Set the use corres sociale.
     *
     * @param bool $useCorresSociale The use corres sociale.
     */
    public function setUseCorresSociale($useCorresSociale) {
        $this->useCorresSociale = $useCorresSociale;
        return $this;
    }
}
