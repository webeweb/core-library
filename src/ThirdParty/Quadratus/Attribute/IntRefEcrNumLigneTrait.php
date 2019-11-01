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
 * Ref ecr num ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefEcrNumLigneTrait {

    /**
     * Ref ecr num ligne.
     *
     * @var int
     */
    private $refEcrNumLigne;

    /**
     * Get the ref ecr num ligne.
     *
     * @return int Returns the ref ecr num ligne.
     */
    public function getRefEcrNumLigne() {
        return $this->refEcrNumLigne;
    }

    /**
     * Set the ref ecr num ligne.
     *
     * @param int $refEcrNumLigne The ref ecr num ligne.
     */
    public function setRefEcrNumLigne($refEcrNumLigne) {
        $this->refEcrNumLigne = $refEcrNumLigne;
        return $this;
    }
}
