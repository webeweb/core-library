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
 * Fs juridique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsJuridiqueTrait {

    /**
     * Fs juridique.
     *
     * @var string
     */
    private $fsJuridique;

    /**
     * Get the fs juridique.
     *
     * @return string Returns the fs juridique.
     */
    public function getFsJuridique() {
        return $this->fsJuridique;
    }

    /**
     * Set the fs juridique.
     *
     * @param string $fsJuridique The fs juridique.
     */
    public function setFsJuridique($fsJuridique) {
        $this->fsJuridique = $fsJuridique;
        return $this;
    }
}
