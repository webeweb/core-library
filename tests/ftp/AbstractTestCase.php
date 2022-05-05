<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests;

use WBW\Library\Core\Tests\AbstractTestCase as BaseTestCase;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests
 * @abstract
 */
abstract class AbstractTestCase extends BaseTestCase {

    /**
     * Local directory.
     *
     * @var string
     */
    protected $localDir;

    /**
     * Local file.
     *
     * @var string
     */
    protected $localFile;

    /**
     * Remote directory.
     *
     * @var string
     */
    protected $remoteDir;

    /**
     * Remote file.
     *
     * @var string
     */
    protected $remoteFile;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        //
        $this->remoteDir  = "/pub";
        $this->remoteFile = "/readme.txt";

        $this->localDir  = realpath(__DIR__ . "/..");
        $this->localFile = implode("", [$this->localDir, $this->remoteFile]);

        if (true === file_exists($this->localFile)) {
            unlink($this->localFile);
        }

        // Set the Authenticator mock.
        $this->authenticator->setHostname("test.rebex.net");
    }
}
