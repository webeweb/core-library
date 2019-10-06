<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Scraping\API;

/**
 * Scraping cleaner interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Scraping\API
 */
interface ScrapingCleanerInterface {

    /**
     * Clean a value.
     *
     * @param string $value The value.
     * @return mixed Return the cleaned value.
     */
    public function clean($value);
}
