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
 * Accepte depuis q bureau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccepteDepuisQBureauTrait {

    /**
     * Accepte depuis q bureau.
     *
     * @var bool
     */
    private $accepteDepuisQBureau;

    /**
     * Get the accepte depuis q bureau.
     *
     * @return bool Returns the accepte depuis q bureau.
     */
    public function getAccepteDepuisQBureau() {
        return $this->accepteDepuisQBureau;
    }

    /**
     * Set the accepte depuis q bureau.
     *
     * @param bool $accepteDepuisQBureau The accepte depuis q bureau.
     */
    public function setAccepteDepuisQBureau($accepteDepuisQBureau) {
        $this->accepteDepuisQBureau = $accepteDepuisQBureau;
        return $this;
    }
}
