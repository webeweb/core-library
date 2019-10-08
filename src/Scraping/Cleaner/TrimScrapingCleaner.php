<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Scraping\Cleaner;

use WBW\Library\Core\Scraping\API\ScrapingCleanerInterface;

/**
 * trim scraping cleaner.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Scraping\Cleaner
 */
class TrimScrapingCleaner implements ScrapingCleanerInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function clean($value) {
        if (null === $value || false === is_string($value)) {
            return null;
        }
        return trim($value);
    }
}
