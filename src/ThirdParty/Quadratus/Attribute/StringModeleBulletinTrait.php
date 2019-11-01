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
 * Modele bulletin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleBulletinTrait {

    /**
     * Modele bulletin.
     *
     * @var string
     */
    private $modeleBulletin;

    /**
     * Get the modele bulletin.
     *
     * @return string Returns the modele bulletin.
     */
    public function getModeleBulletin() {
        return $this->modeleBulletin;
    }

    /**
     * Set the modele bulletin.
     *
     * @param string $modeleBulletin The modele bulletin.
     */
    public function setModeleBulletin($modeleBulletin) {
        $this->modeleBulletin = $modeleBulletin;
        return $this;
    }
}
