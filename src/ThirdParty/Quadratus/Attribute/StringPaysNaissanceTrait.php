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
 * Pays naissance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPaysNaissanceTrait {

    /**
     * Pays naissance.
     *
     * @var string
     */
    private $paysNaissance;

    /**
     * Get the pays naissance.
     *
     * @return string Returns the pays naissance.
     */
    public function getPaysNaissance() {
        return $this->paysNaissance;
    }

    /**
     * Set the pays naissance.
     *
     * @param string $paysNaissance The pays naissance.
     */
    public function setPaysNaissance($paysNaissance) {
        $this->paysNaissance = $paysNaissance;
        return $this;
    }
}
