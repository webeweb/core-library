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
 * New q bureau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNewQBureauTrait {

    /**
     * New q bureau.
     *
     * @var bool
     */
    private $newQBureau;

    /**
     * Get the new q bureau.
     *
     * @return bool Returns the new q bureau.
     */
    public function getNewQBureau() {
        return $this->newQBureau;
    }

    /**
     * Set the new q bureau.
     *
     * @param bool $newQBureau The new q bureau.
     */
    public function setNewQBureau($newQBureau) {
        $this->newQBureau = $newQBureau;
        return $this;
    }
}
