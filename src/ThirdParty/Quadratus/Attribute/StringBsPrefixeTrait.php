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
 * Bs prefixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBsPrefixeTrait {

    /**
     * Bs prefixe.
     *
     * @var string
     */
    private $bsPrefixe;

    /**
     * Get the bs prefixe.
     *
     * @return string Returns the bs prefixe.
     */
    public function getBsPrefixe() {
        return $this->bsPrefixe;
    }

    /**
     * Set the bs prefixe.
     *
     * @param string $bsPrefixe The bs prefixe.
     */
    public function setBsPrefixe($bsPrefixe) {
        $this->bsPrefixe = $bsPrefixe;
        return $this;
    }
}
