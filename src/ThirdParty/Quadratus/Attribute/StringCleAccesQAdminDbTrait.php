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
 * Cle acces q admin db trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCleAccesQAdminDbTrait {

    /**
     * Cle acces q admin db.
     *
     * @var string
     */
    private $cleAccesQAdminDb;

    /**
     * Get the cle acces q admin db.
     *
     * @return string Returns the cle acces q admin db.
     */
    public function getCleAccesQAdminDb() {
        return $this->cleAccesQAdminDb;
    }

    /**
     * Set the cle acces q admin db.
     *
     * @param string $cleAccesQAdminDb The cle acces q admin db.
     */
    public function setCleAccesQAdminDb($cleAccesQAdminDb) {
        $this->cleAccesQAdminDb = $cleAccesQAdminDb;
        return $this;
    }
}
