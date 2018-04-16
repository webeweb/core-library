<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Utility;

use Exception;
use ReflectionClass;
use ReflectionException;
use WBW\Library\Core\Exception\Hook\HookClassNotFoundException;
use WBW\Library\Core\Exception\Hook\HookMethodNotFoundException;
use WBW\Library\Core\Exception\Hook\HookSyntaxErrorException;
use WBW\Library\Core\Utility\IO\FileUtility;

/**
 * Hook utility.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Utility
 * @final
 */
final class HookUtility {

    /**
     * Get the hooks.
     *
     * @param string $classpath The class path.
     * @param string $namespace The namespace.
     * @param string $classname The class name.
     * @param string $extends The class extend.
     * @param string $method The class method.
     * @return array Returns the hooks array.
     * @throws HookClassNotFoundException Throws a hook class not found if the classname is not found.
     */
    public static function getHooks($classpath, $namespace, $classname = null, $extends = null, $method = null) {

        //
        $hooks = [];

        // Get the filenames.
        $filenames = FileUtility::getFileNames($classpath, ".php");

        // Handle each filenames.
        foreach ($filenames as $filename) {

            // Check the class name.
            if (null !== $classname && 0 === preg_match($classname, $filename)) {
                continue;
            }

            // Import the class.
            try {
                require_once $classpath . "/" . $filename;
            } catch (Exception $ex) {
                throw new HookSyntaxErrorException($classpath . "/" . $filename);
            }

            // Init. the complete class name.
            $completeClassname = $namespace . basename($filename, ".php");

            try {
                $rc = new ReflectionClass($completeClassname);
            } catch (ReflectionException $ex) {
                throw new HookClassNotFoundException($completeClassname, $ex);
            }

            // Check the extends.
            if (false === (null === $extends || true === $rc->isSubclassOf($extends))) {
                continue;
            }

            // Initialize the hook.
            $hook = [];

            $hook["classpath"] = $classpath;
            $hook["namespace"] = $namespace;
            $hook["filename"]  = $filename;
            $hook["class"]     = $rc;
            $hook["method"]    = null;

            $hooks[] = $hook;

            // Check the method.
            if (null === $method) {
                continue;
            }

            try {
                $rm = $rc->getMethod($method);

                $hooks[count($hooks) - 1]["method"] = $rm;
            } catch (ReflectionException $ex) {
                throw new HookMethodNotFoundException($method, $ex);
            }
        }

        // Returns the hooks.
        return $hooks;
    }

}
