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
 * Maintien specifique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaintienSpecifiqueTrait {

    /**
     * Maintien specifique.
     *
     * @var bool
     */
    private $maintienSpecifique;

    /**
     * Get the maintien specifique.
     *
     * @return bool Returns the maintien specifique.
     */
    public function getMaintienSpecifique() {
        return $this->maintienSpecifique;
    }

    /**
     * Set the maintien specifique.
     *
     * @param bool $maintienSpecifique The maintien specifique.
     */
    public function setMaintienSpecifique($maintienSpecifique) {
        $this->maintienSpecifique = $maintienSpecifique;
        return $this;
    }
}
