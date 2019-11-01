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
 * Methode trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMethodeTrait {

    /**
     * Methode.
     *
     * @var string
     */
    private $methode;

    /**
     * Get the methode.
     *
     * @return string Returns the methode.
     */
    public function getMethode() {
        return $this->methode;
    }

    /**
     * Set the methode.
     *
     * @param string $methode The methode.
     */
    public function setMethode($methode) {
        $this->methode = $methode;
        return $this;
    }
}
