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
 * Bulletin publie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBulletinPublieTrait {

    /**
     * Bulletin publie.
     *
     * @var bool
     */
    private $bulletinPublie;

    /**
     * Get the bulletin publie.
     *
     * @return bool Returns the bulletin publie.
     */
    public function getBulletinPublie() {
        return $this->bulletinPublie;
    }

    /**
     * Set the bulletin publie.
     *
     * @param bool $bulletinPublie The bulletin publie.
     */
    public function setBulletinPublie($bulletinPublie) {
        $this->bulletinPublie = $bulletinPublie;
        return $this;
    }
}
